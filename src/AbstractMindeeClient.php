<?php

namespace Laudeco\Mindee;
use Laudeco\Mindee\Domain\Authentication\AuthenticationInterface;

abstract class AbstractMindeeClient implements MindeeClientInterface
{

    public function __construct(
        private AuthenticationInterface $authentication
    )
    {
    }


    public function parse()
    {
        // TODO: Implement parse() method.
    }
}