<?php

namespace Laudeco\Mindee\Domain;

final class SupplierPaymentDetail
{
    private function __construct(
        private string $iban,
        private string $bic,
        private string $accountNumber,
        private string $routingNumber
    ) {
    }

    public static function create(string $iban, string $bic, string $accountNumber, string $routingNumber): self
    {
        return new self($iban, $bic, $accountNumber, $routingNumber);
    }

    public function getIban(): string
    {
        return $this->iban;
    }

    public function getBic(): string
    {
        return $this->bic;
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function getRoutingNumber(): string
    {
        return $this->routingNumber;
    }

}
