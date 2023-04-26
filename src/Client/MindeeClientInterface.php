<?php

namespace Laudeco\Mindee\Client;

use Laudeco\Mindee\Domain\File\FileInterface;
use Laudeco\Mindee\Domain\Response\PredictResponse;
use Laudeco\Mindee\Domain\Response\ResponseInterface;

interface MindeeClientInterface
{
    public function parse(FileInterface $file):PredictResponse;

}