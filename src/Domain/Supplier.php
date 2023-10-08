<?php

namespace Laudeco\Mindee\Domain;

final class Supplier
{
    private function __construct(
        private string $name,
        private string $address,
        private string $phoneNumber,
        private SupplierPaymentDetailCollection $paymentDetailCollection,
        private CompanyInformationCollection $companyInformationCollection
    ) {
    }

    public static function create(string $name, string $address, string $phoneNumber): self
    {
        return new self($name, $address, $phoneNumber, SupplierPaymentDetailCollection::create(), CompanyInformationCollection::create());
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

    public function getPaymentDetailCollection(): SupplierPaymentDetailCollection
    {
        return $this->paymentDetailCollection;
    }

    public function getCompanyInformationCollection(): CompanyInformationCollection
    {
        return $this->companyInformationCollection;
    }

    public function addPaymentDetail(SupplierPaymentDetail $supplierPaymentDetail): self
    {
        return new self(
            $this->name,
            $this->address,
            $this->phoneNumber,
            $this->paymentDetailCollection->add($supplierPaymentDetail),
            $this->companyInformationCollection
        );
    }

    public function addCompanyInformation(CompanyInformation $companyInformation): self
    {
        return new self(
            $this->name,
            $this->address,
            $this->phoneNumber,
            $this->paymentDetailCollection,
            $this->companyInformationCollection->add($companyInformation)
        );
    }

    public function getVatNumber(): string
    {
        return $this->companyInformationCollection->getVatNumber();
    }

}
