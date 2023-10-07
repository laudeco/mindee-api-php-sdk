<?php

namespace Laudeco\Mindee\Domain;

final class Supplier
{
    private function __construct(
        private string $name,
        private string $address,
        private string $phoneNumber,
        private string $vatNumber,
        private SupplierPaymentDetailCollection $paymentDetailCollection
    ) {
    }

    public static function create(string $name, string $address, string $phoneNumber, string $vatNumber): self
    {
        return new self($name, $address, $phoneNumber, $vatNumber, SupplierPaymentDetailCollection::create());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }

    public function getPaymentDetailCollection(): SupplierPaymentDetailCollection
    {
        return $this->paymentDetailCollection;
    }


}
