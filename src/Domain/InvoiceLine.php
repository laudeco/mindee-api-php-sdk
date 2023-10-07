<?php

namespace Laudeco\Mindee\Domain;

final class InvoiceLine
{
    private function __construct(
        private string $productCode,
        private string $description,
        private float $quantity,
        private float $unitPrice,
        private float $totalAmount,
        private float $taxRate,
        private float $taxeAmount
    ) {
    }

    public static function create(
        string $productCode,
        string $description,
        float $quantity,
        float $unitPrice,
        float $totalAmount,
        float $taxRate,
        float $taxeAmount
    ): self {
        return new self($productCode, $description, $quantity, $unitPrice, $totalAmount, $taxRate, $taxeAmount);
    }

    public function getProductCode(): string
    {
        return $this->productCode;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    public function getTotalAmount(): float
    {
        return $this->totalAmount;
    }

    public function getTaxRate(): float
    {
        return $this->taxRate;
    }

    public function getTaxeAmount(): float
    {
        return $this->taxeAmount;
    }


}
