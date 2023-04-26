<?php

namespace Laudeco\Mindee\Client;
use Laudeco\Mindee\Domain\Authentication\AuthenticationInterface;
use Laudeco\Mindee\Domain\File\FileInterface;
use Laudeco\Mindee\Domain\Response\PredictResponse;

abstract class AbstractMindeeClient implements MindeeClientInterface
{

    public function __construct(
        private AuthenticationInterface $authentication
    )
    {
    }

    public function parse(FileInterface $file): PredictResponse
    {
        // TODO: Implement parse() method.
    }


}