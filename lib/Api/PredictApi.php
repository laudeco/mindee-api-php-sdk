<?php
/**
 * PredictApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Financial Document
 *
 * Financial Document endpoints
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\Model\JSONPredict;
use OpenAPI\Client\ObjectSerializer;

/**
 * PredictApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PredictApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'productsMindeeFinancialDocumentVersionPredictPost' => [
            'application/json',
            'multipart/form-data',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Operation productsMindeeFinancialDocumentVersionPredictPost
     *
     * Prediction endpoint
     *
     * @param  string                            $version API version (required)
     * @param  \OpenAPI\Client\Model\JSONPredict $jsonPredict json_predict (required)
     * @param  string                            $contentType The value for the Content-Type header. Check self::contentTypes['productsMindeeFinancialDocumentVersionPredictPost'] to see the possible values for this operation
     *
     * @return \OpenAPI\Client\Model\SuccessPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse
     *@throws \InvalidArgumentException
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     */
    public function parse(string $version, JSONPredict $jsonPredict, string $contentType = self::contentTypes['productsMindeeFinancialDocumentVersionPredictPost'][0])
    {
        [$response] = $this->productsMindeeFinancialDocumentVersionPredictPostWithHttpInfo($version, $jsonPredict, $contentType);
        return $response;
    }

    /**
     * Operation productsMindeeFinancialDocumentVersionPredictPostWithHttpInfo
     *
     * Prediction endpoint
     *
     * @param  string $version API version (required)
     * @param  \OpenAPI\Client\Model\JSONPredict $json_predict (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['productsMindeeFinancialDocumentVersionPredictPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\SuccessPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse|\OpenAPI\Client\Model\ErrorPredictResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function productsMindeeFinancialDocumentVersionPredictPostWithHttpInfo($version, $json_predict, string $contentType = self::contentTypes['productsMindeeFinancialDocumentVersionPredictPost'][0])
    {
        $request = $this->productsMindeeFinancialDocumentVersionPredictPostRequest($version, $json_predict, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\OpenAPI\Client\Model\SuccessPredictResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\SuccessPredictResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\SuccessPredictResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\ErrorPredictResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ErrorPredictResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ErrorPredictResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\OpenAPI\Client\Model\ErrorPredictResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ErrorPredictResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ErrorPredictResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\ErrorPredictResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ErrorPredictResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ErrorPredictResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\ErrorPredictResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ErrorPredictResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ErrorPredictResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\OpenAPI\Client\Model\ErrorPredictResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ErrorPredictResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ErrorPredictResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\ErrorPredictResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ErrorPredictResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ErrorPredictResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\OpenAPI\Client\Model\ErrorPredictResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ErrorPredictResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ErrorPredictResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\SuccessPredictResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\SuccessPredictResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorPredictResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorPredictResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorPredictResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorPredictResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorPredictResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorPredictResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorPredictResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'productsMindeeFinancialDocumentVersionPredictPost'
     *
     * @param  string $version API version (required)
     * @param  \OpenAPI\Client\Model\JSONPredict $json_predict (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['productsMindeeFinancialDocumentVersionPredictPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    private function productsMindeeFinancialDocumentVersionPredictPostRequest($version, $json_predict, string $contentType = self::contentTypes['productsMindeeFinancialDocumentVersionPredictPost'][0])
    {

        // verify the required parameter 'version' is set
        if ($version === null || (is_array($version) && count($version) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version when calling productsMindeeFinancialDocumentVersionPredictPost'
            );
        }

        // verify the required parameter 'json_predict' is set
        if ($json_predict === null || (is_array($json_predict) && count($json_predict) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $json_predict when calling productsMindeeFinancialDocumentVersionPredictPost'
            );
        }


        $resourcePath = '/products/mindee/financial_document/{version}/predict';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($version !== null) {
            $resourcePath = str_replace(
                '{' . 'version' . '}',
                ObjectSerializer::toPathValue($version),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'multipart/form-data', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($json_predict)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($json_predict));
            } else {
                $httpBody = $json_predict;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}