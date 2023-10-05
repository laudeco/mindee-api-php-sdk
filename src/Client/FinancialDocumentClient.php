<?php

namespace Laudeco\Mindee\Client;

use Laudeco\Mindee\Domain\File\FileInterface;
use Laudeco\Mindee\Domain\Response\PredictResponse;

final class FinancialDocumentClient extends AbstractMindeeClient
{

    protected function version(): string
    {
        return 'v1';
    }
}