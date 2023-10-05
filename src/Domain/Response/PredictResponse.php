<?php

namespace Laudeco\Mindee\Domain\Response;

use OpenAPI\Client\Model\SuccessPredictResponseDocumentInference;

final class PredictResponse implements ResponseInterface
{
    public function __construct(private SuccessPredictResponseDocumentInference $inference){}

    public function customerName():string{
        return $this->inference->prediction()->customerName()->getValue();
    }
    public function customerAddress():string{
        return $this->inference->prediction()->customerAddress()->getValue();
    }


}