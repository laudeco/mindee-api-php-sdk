# OpenAPIClient-php

Financial Document endpoints


## Installation & Usage

### Requirements
PHP 8.0 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

try {
    $token = ''; // API Token
    $file = ''; //TODO change by a file
    $document = FilePath::fromPath($file); // Any concrete class that implements _FileInterface_
    
    $client = MindeeClientFactory::financialDocument(new Token($token));
    $result = $client->parse($document);

    print_r($result);
} catch (Exception $e) {
    echo 'Exception :', $e->getMessage(), PHP_EOL;
}

```

## Models

- [Category](docs/Model/Category.md)
- [Category1](docs/Model/Category1.md)
- [CustomerAddress](docs/Model/CustomerAddress.md)
- [CustomerAddress1](docs/Model/CustomerAddress1.md)
- [CustomerCompanyRegistrationsInner](docs/Model/CustomerCompanyRegistrationsInner.md)
- [CustomerCompanyRegistrationsInner1](docs/Model/CustomerCompanyRegistrationsInner1.md)
- [CustomerName](docs/Model/CustomerName.md)
- [CustomerName1](docs/Model/CustomerName1.md)
- [DateOfIssue](docs/Model/DateOfIssue.md)
- [DateOfIssue1](docs/Model/DateOfIssue1.md)
- [DocumentTypeBeta](docs/Model/DocumentTypeBeta.md)
- [DueDate](docs/Model/DueDate.md)
- [DueDate1](docs/Model/DueDate1.md)
- [ErrorPredictResponse](docs/Model/ErrorPredictResponse.md)
- [ErrorPredictResponseApiRequest](docs/Model/ErrorPredictResponseApiRequest.md)
- [ErrorPredictResponseApiRequestError](docs/Model/ErrorPredictResponseApiRequestError.md)
- [ImageOrientation](docs/Model/ImageOrientation.md)
- [InvoiceNumber](docs/Model/InvoiceNumber.md)
- [InvoiceNumber1](docs/Model/InvoiceNumber1.md)
- [JSONPredict](docs/Model/JSONPredict.md)
- [LineItemsInner](docs/Model/LineItemsInner.md)
- [LineItemsInner1](docs/Model/LineItemsInner1.md)
- [Locale](docs/Model/Locale.md)
- [Locale1](docs/Model/Locale1.md)
- [MindeeFinancialDocument1DocPrediction](docs/Model/MindeeFinancialDocument1DocPrediction.md)
- [MindeeFinancialDocument1PagePrediction](docs/Model/MindeeFinancialDocument1PagePrediction.md)
- [PurchaseTime](docs/Model/PurchaseTime.md)
- [PurchaseTime1](docs/Model/PurchaseTime1.md)
- [ReferenceNumbersInner](docs/Model/ReferenceNumbersInner.md)
- [ReferenceNumbersInner1](docs/Model/ReferenceNumbersInner1.md)
- [SubCategory](docs/Model/SubCategory.md)
- [SubCategory1](docs/Model/SubCategory1.md)
- [SuccessPredictResponse](docs/Model/SuccessPredictResponse.md)
- [SuccessPredictResponseApiRequest](docs/Model/SuccessPredictResponseApiRequest.md)
- [SuccessPredictResponseDocument](docs/Model/SuccessPredictResponseDocument.md)
- [SuccessPredictResponseDocumentInference](docs/Model/SuccessPredictResponseDocumentInference.md)
- [SuccessPredictResponseDocumentInferencePagesInner](docs/Model/SuccessPredictResponseDocumentInferencePagesInner.md)
- [SuccessPredictResponseDocumentInferenceProduct](docs/Model/SuccessPredictResponseDocumentInferenceProduct.md)
- [SupplierAddress](docs/Model/SupplierAddress.md)
- [SupplierAddress1](docs/Model/SupplierAddress1.md)
- [SupplierCompanyRegistrationsInner](docs/Model/SupplierCompanyRegistrationsInner.md)
- [SupplierCompanyRegistrationsInner1](docs/Model/SupplierCompanyRegistrationsInner1.md)
- [SupplierName](docs/Model/SupplierName.md)
- [SupplierName1](docs/Model/SupplierName1.md)
- [SupplierPaymentDetailsInner](docs/Model/SupplierPaymentDetailsInner.md)
- [SupplierPaymentDetailsInner1](docs/Model/SupplierPaymentDetailsInner1.md)
- [TaxesInner](docs/Model/TaxesInner.md)
- [TaxesInner1](docs/Model/TaxesInner1.md)
- [TipAndGratuity](docs/Model/TipAndGratuity.md)
- [TipAndGratuity1](docs/Model/TipAndGratuity1.md)
- [TotalAmountIncludingTaxesTipsFeesAndOtherCharges](docs/Model/TotalAmountIncludingTaxesTipsFeesAndOtherCharges.md)
- [TotalAmountIncludingTaxesTipsFeesAndOtherCharges1](docs/Model/TotalAmountIncludingTaxesTipsFeesAndOtherCharges1.md)
- [TotalNetOfTaxesFeesAndDiscount](docs/Model/TotalNetOfTaxesFeesAndDiscount.md)
- [TotalNetOfTaxesFeesAndDiscount1](docs/Model/TotalNetOfTaxesFeesAndDiscount1.md)
- [TotalTax](docs/Model/TotalTax.md)
- [TotalTax1](docs/Model/TotalTax1.md)

## Authorization

### apiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```
