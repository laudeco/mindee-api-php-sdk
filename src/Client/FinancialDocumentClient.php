<?php

namespace Laudeco\Mindee\Client;

use Laudeco\Mindee\Domain\File\FileInterface;
use Laudeco\Mindee\Domain\Response\FinancialDocumentPredictResponse;
use Laudeco\Mindee\Domain\Response\FinancialDocumentResponseInterface;
use Laudeco\Mindee\Domain\Response\PredictResponse;
use Laudeco\Mindee\Domain\Response\ResponseInterface;
use OpenAPI\Client\Model\SuccessPredictResponseDocumentInference;

final class FinancialDocumentClient extends AbstractMindeeClient
{
    protected function version(): string
    {
        return 'v1';
    }

    protected function formatResponse(SuccessPredictResponseDocumentInference $inference): FinancialDocumentResponseInterface
    {
        return FinancialDocumentPredictResponse::fromPrediction($inference->prediction());
    }

    public function parse(FileInterface $file): FinancialDocumentResponseInterface
    {
        /** @var FinancialDocumentResponseInterface $document */
        $document = parent::parse($file);
        return $document;
    }


}
