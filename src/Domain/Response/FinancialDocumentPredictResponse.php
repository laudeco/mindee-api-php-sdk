<?php

namespace Laudeco\Mindee\Domain\Response;

use Laudeco\Mindee\Domain\CompanyInformation;
use Laudeco\Mindee\Domain\Customer;
use Laudeco\Mindee\Domain\InvoiceLine;
use Laudeco\Mindee\Domain\InvoiceLineCollection;
use Laudeco\Mindee\Domain\Supplier;
use Laudeco\Mindee\Domain\SupplierPaymentDetail;
use OpenAPI\Client\Model\LineItemsInner;
use OpenAPI\Client\Model\MindeeFinancialDocument1DocPrediction;
use OpenAPI\Client\Model\SuccessPredictResponseDocumentInference;

/**
 * Temporary class while we are using the auto generated stub.
 */
final class FinancialDocumentPredictResponse implements FinancialDocumentResponseInterface
{
    private function __construct(
        private Customer $customer,
        private Supplier $supplier,
        private InvoiceLineCollection $invoiceLines,
        private ?\DateTimeImmutable $date,
        private ?\DateTimeImmutable $dueDate,
        private string $reference,
        private float $totalGross,
        private float $totalNet
    ) {
    }

    public static function fromPrediction(MindeeFinancialDocument1DocPrediction $prediction)
    {
        $customer = Customer::create(
            $prediction->getCustomerName()?->getValue() ?: '',
            $prediction->getCustomerAddress()?->getValue() ?: ''
        );
        foreach(($prediction->getCustomerCompanyRegistrations() ?: []) as $customerInformation) {
            $customer = $customer->addCompanyInformation(
                CompanyInformation::create(
                    $customerInformation->getType() ?: '',
                    $customerInformation->getValue() ?: ''
                )
            );
        }

        $supplier = Supplier::create(
            $prediction->getSupplierName()?->getValue(),
            $prediction->getSupplierAddress()?->getValue(),
            ''
        );
        foreach(($prediction->getSupplierCompanyRegistrations() ?: []) as $supplierInformation) {
            $supplier = $supplier->addCompanyInformation(
                CompanyInformation::create(
                    $supplierInformation->getType() ?: '',
                    $supplierInformation->getValue() ?: ''
                )
            );
        }
        foreach ($prediction->getSupplierPaymentDetails() ?: [] as $paymentDetail) {
            $supplier = $supplier->addPaymentDetail(
                SupplierPaymentDetail::create(
                    $paymentDetail->getIban() ?: '',
                    $paymentDetail->getSwift() ?: '',
                    $paymentDetail->getAccountNumber() ?: '',
                    $paymentDetail->getRoutingNumber() ?: ''
                )
            );
        }

        return new self(
            $customer,
            $supplier,
            InvoiceLineCollection::create()->addAll(array_map(fn (LineItemsInner $item) => InvoiceLine::create(
                $item->getProductCode() ?: '',
                $item->getDescription() ?: '',
                $item->getQuantity() ?: 0,
                $item->getUnitPrice() ?: 0,
                $item->getTotalAmount() ?: 0,
                $item->getTaxRate() ?: 0,
                $item->getTaxAmount() ?: 0
            ), $prediction->getLineItems() ?: [])),
            ($prediction->getDate()?->getValue() ? \DateTimeImmutable::createFromMutable($prediction->getDate()?->getValue()) : null),
            ($prediction->getDueDate()?->getValue() ? \DateTimeImmutable::createFromMutable($prediction->getDueDate()?->getValue()) : null),
            $prediction->getInvoiceNumber()?->getValue() ?: '',
            $prediction->getTotalAmount()?->getValue() ?: -1,
            $prediction->getTotalNet()?->getValue() ?: -1
        );
    }

    public function customer(): Customer
    {
        return $this->customer;
    }

    public function supplier(): Supplier
    {
        return $this->supplier;
    }

    public function lines(): InvoiceLineCollection
    {
        return $this->invoiceLines;
    }

    public function date(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    public function dueDate(): ?\DateTimeImmutable
    {
        return $this->dueDate;
    }

    public function reference(): string
    {
        return $this->reference;
    }

    public function totalGross(): float
    {
        return $this->totalGross;
    }

    public function totalNet(): float
    {
        return $this->totalNet;
    }

}
