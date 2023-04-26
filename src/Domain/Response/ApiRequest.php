<?php

namespace Laudeco\Mindee\Domain\Response;

final class ApiRequest
{

    private ApiRequestError $error;
    private string $status;
    /**
     * @var array | string[]
     */
    private array $resources;
    private string $url;
    private int $statusCode;

}