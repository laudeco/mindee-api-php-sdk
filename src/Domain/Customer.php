<?php

namespace Laudeco\Mindee\Domain;

final class Customer
{
    private function __construct(
        private string $name,
        private string $address,
        private CompanyInformationCollection $companyInformationCollection
    ) {
    }

    public static function create(string $name, string $address): self
    {
        return new self($name, $address, CompanyInformationCollection::create());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getCompanyInformationCollection(): CompanyInformationCollection
    {
        return $this->companyInformationCollection;
    }

    public function addCompanyInformation(CompanyInformation $companyInformation): self
    {
        return new self(
            $this->name,
            $this->address,
            $this->companyInformationCollection->add($companyInformation)
        );
    }

    public function getVatNumber(): string
    {
        return $this->companyInformationCollection->getVatNumber();
    }
}
