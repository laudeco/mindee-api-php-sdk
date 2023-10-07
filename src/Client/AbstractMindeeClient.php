<?php

namespace Laudeco\Mindee\Client;
use Laudeco\Mindee\Domain\Authentication\AuthenticationInterface;
use Laudeco\Mindee\Domain\File\FileInterface;
use Laudeco\Mindee\Domain\Response\PredictResponse;
use Laudeco\Mindee\Domain\Response\ResponseInterface;
use OpenAPI\Client\Api\PredictApi;
use OpenAPI\Client\Api\PredictApiFactory;
use OpenAPI\Client\Model\JSONPredict;
use OpenAPI\Client\Model\SuccessPredictResponseDocumentInference;

abstract class AbstractMindeeClient implements MindeeClientInterface
{

    private PredictApi $predictApi;

    public function __construct(
        protected AuthenticationInterface $authentication
    )
    {
        $this->predictApi = PredictApiFactory::fromAuthentication($this->authentication);
    }

    protected abstract function formatResponse(SuccessPredictResponseDocumentInference $inference):ResponseInterface;
    protected abstract function version():string;

    public function parse(FileInterface $file): ResponseInterface
    {
        $documents = $this->predictApi->parse($this->version(), $this->jsonPredict($file),'application/json');
        if(!$documents->getDocument() || !$documents->getDocument()->getInference() ){
            throw new \Exception('Not found response');
        }
        return $this->formatResponse($documents->getDocument()->getInference());
    }

    private function jsonPredict(FileInterface $file):JSONPredict
    {
        $json = new JSONPredict();
        $json->setDocument(base64_encode($file->content()));

        return $json;
    }


}