<?php

use Laudeco\Mindee\Domain\Authentication\Token;
use Laudeco\Mindee\Domain\File\FilePath;
use Laudeco\Mindee\MindeeClientFactory;

require_once(__DIR__ . '/vendor/autoload.php');

$token = ''; // API Token
$file = ''; //TODO change by a file

$client = MindeeClientFactory::financialDocument(new Token($token));


try {
    $result = $client->parse(FilePath::fromPath($file));
    echo $result->customerName()."\n";
    echo $result->customerAddress()."\n";
} catch (Exception $e) {
    echo 'Exception when calling PredictApi->productsMindeeFinancialDocumentVersionPredictPost: ', $e->getMessage(), PHP_EOL;
}
