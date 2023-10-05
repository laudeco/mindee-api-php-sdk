# OpenAPI\Client\PredictApi

All URIs are relative to https://api.mindee.net/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productsMindeeFinancialDocumentVersionPredictPost()**](PredictApi.md#productsMindeeFinancialDocumentVersionPredictPost) | **POST** /products/mindee/financial_document/{version}/predict | Prediction endpoint |


## `productsMindeeFinancialDocumentVersionPredictPost()`

```php
productsMindeeFinancialDocumentVersionPredictPost($version, $json_predict): \OpenAPI\Client\Model\SuccessPredictResponse
```

Prediction endpoint

Extract your fields from a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PredictApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string | API version
$json_predict = new \OpenAPI\Client\Model\JSONPredict(); // \OpenAPI\Client\Model\JSONPredict

try {
    $result = $apiInstance->parse($version, $json_predict);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredictApi->productsMindeeFinancialDocumentVersionPredictPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| API version | |
| **json_predict** | [**\OpenAPI\Client\Model\JSONPredict**](../Model/JSONPredict.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SuccessPredictResponse**](../Model/SuccessPredictResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
