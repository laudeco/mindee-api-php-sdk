<?php

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use Laudeco\Mindee\Domain\Authentication\AuthenticationInterface;
use OpenAPI\Client\Configuration;

final class PredictApiFactory
{
    public static function fromAuthentication(AuthenticationInterface $authentication): PredictApi
    {
        // Configure API key authorization: apiKey
        $config = Configuration::getDefaultConfiguration()
            ->setApiKey('Authorization', $authentication->token())
            ->setApiKeyPrefix('Authorization', 'Token');

        return new PredictApi(
            new Client(),
            $config
        );
    }

}
