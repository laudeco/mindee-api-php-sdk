<?php

namespace Laudeco\Mindee\Domain;

final class CompanyInformationCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param array| CompanyInformation[] $companyInformations
     */
    private function __construct(private array $companyInformations)
    {
    }

    public static function create(): self
    {
        return new self([]);
    }

    public function add(CompanyInformation $companyInformation): self
    {
        return new self(array_merge($this->companyInformations, [$companyInformation]));
    }

    public function count(): int
    {
        return count($this->companyInformations);
    }

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->companyInformations);
    }

    public function getVatNumber(): string
    {
        foreach ($this->companyInformations as $companyInformation) {
            if ($companyInformation->isVatNumber()) {
                return $companyInformation->getValue();
            }
        }
        return '';
    }
}
