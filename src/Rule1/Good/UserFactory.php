<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule1\Good;

class UserFactory
{
    public static function createFromArray(array $data): User
    {
        $user = new User(id: $data['id'], active: $data['active']);

        foreach ($data['carts'] as $cart) {
            $user->addCart(self::createCartFromArray($cart));
        }

        return $user;
    }

    private static function createCartFromArray(array $data): CartInterface
    {
        if (! CartBase::isValid($data['status'])) {
            return new CartInvalid(id: $data['id']);
        }

        $cart = new Cart(
            id: $data['id'],
            status: $data['status'],
            totalAmount: $data['total_amount'],
            quantityItems: $data['quantity_items'],
        );

        foreach ($data['products'] as $product) {
            $cart->addProduct(self::createProductFromArray($product));
        }

        return $cart;
    }

    private static function createProductFromArray(array $data): Product
    {
        return new Product(
            sku: $data['sku'],
            amount: $data['amount'],
            quantity: $data['quantity'],
        );
    }
}
