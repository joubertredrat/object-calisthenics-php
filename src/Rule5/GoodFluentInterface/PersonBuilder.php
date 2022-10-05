<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule5\GoodFluentInterface;

class PersonBuilder
{
    private array $fields = [];

    public function addName(string $value): self
    {
        $this->addField('name', $value);
        return $this;
    }

    public function addAge(int $age): self
    {
        $this->addField('age', $age);
        return $this;
    }

    public function addEmail(string $value): self
    {
        $this->addField('email', $value);
        return $this;
    }

    public function addSite(string $value): self
    {
        $this->addField('site', $value);
        return $this;
    }

    public function addVisible(bool $value): self
    {
        $this->addField('visible', $value);
        return $this;
    }

    public function getJson(): string
    {
        return \json_encode($this->fields);
    }

    private function addField(string $field, mixed $value): void
    {
        $this->fields[$field] = $value;
    }
}
