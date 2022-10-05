<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule1\Bad;

class UserFactory
{
    public static function createFromArray(array $data): User
    {
        $user = new User(id: $data['id'], active: $data['active']);

        foreach ($data['carts'] as $cartData) {
            if (CartBase::isValid($cartData['status'])) {
                $cart = new Cart(
                    id: $cartData['id'],
                    status: $cartData['status'],
                    totalAmount: $cartData['total_amount'],
                    quantityItems: $cartData['quantity_items'],
                );

                foreach ($cartData['products'] as $productData) {
                    $product = new Product(
                        sku: $productData['sku'],
                        amount: $productData['amount'],
                        quantity: $productData['quantity'],
                    );

                    $cart->addProduct($product);
                }

                $user->addCart($cart);
            } else {
                $cart = new CartInvalid(id: $cartData['id']);
                $user->addCart($cart);
            }
        }

        return $user;
    }
}
