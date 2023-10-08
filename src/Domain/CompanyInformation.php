<?php

namespace Laudeco\Mindee\Domain;

final class CompanyInformation
{
    private function __construct(
        private string $type,
        private string $value
    ) {
    }

    public static function create(string $type, string $value): self
    {
        return new self($type, $value);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function isVatNumber(): bool
    {
        return strtoupper($this->type) === 'VAT NUMBER';
    }

}
