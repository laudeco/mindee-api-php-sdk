<?php

namespace Laudeco\Mindee\Domain\Response;

use Laudeco\Mindee\Domain\Customer;
use Laudeco\Mindee\Domain\InvoiceLineCollection;
use Laudeco\Mindee\Domain\Supplier;

interface FinancialDocumentResponseInterface extends ResponseInterface
{
    public function customer(): Customer;
    public function supplier(): Supplier;
    public function lines(): InvoiceLineCollection;
    public function date(): ?\DateTimeImmutable;
    public function dueDate(): ?\DateTimeImmutable;
    public function reference(): string;
    public function totalGross(): float;
    public function totalNet(): float;
}
