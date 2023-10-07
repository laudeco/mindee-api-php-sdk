<?php

namespace Laudeco\Mindee\Domain;

use Traversable;

final class InvoiceLineCollection implements \Countable, \IteratorAggregate
{
    private function __construct(private array $collection)
    {
    }

    public static function create(): self
    {
        return new self([]);
    }

    public function add(InvoiceLine $item): self
    {
        return new self(array_merge($this->collection, [$item]));
    }

    public function addAll(array $items): self
    {
        return new self(array_merge($this->collection, $items));
    }

    /**
     * @return \ArrayIterator|InvoiceLine[]
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
