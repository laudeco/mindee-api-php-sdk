<?php

namespace Laudeco\Mindee\Domain;

final class Customer
{
    private function __construct(
        private string $name,
        private string $address,
        private string $vatNumber
    ) {
    }

    public static function create(string $name, string $address, string $vatNumber): self
    {
        return new self($name, $address, $vatNumber);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }




}
