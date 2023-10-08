<?php

namespace Laudeco\Mindee\Domain;

final class SupplierPaymentDetailCollection implements \Countable, \IteratorAggregate
{
    private function __construct(private array $collection)
    {
    }

    public static function create(): self
    {
        return new self([]);
    }

    public function add(SupplierPaymentDetail $item): self
    {
        return new self(array_merge($this->collection, [$item]));
    }

    /**
     * @return \ArrayIterator| SupplierPaymentDetail[]
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->collection);
    }

    public function count()
    {
        return count($this->collection);
    }
}
