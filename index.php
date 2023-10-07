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

    echo "Supplier : " . $result->supplier()->getName() . "\n";
    echo "Supplier Address: " . $result->supplier()->getAddress() . "\n";
    echo "\n---------------------------------------------------------------------- \n";
    echo "Customer: " . $result->customer()->getName() . "\n";
    echo "Customer Address: " . $result->customer()->getAddress() . "\n";
    echo "\n---------------------------------------------------------------------- \n";
    echo "Date: " . $result->date()?->format('d-m-Y') . "\n";
    echo "Date due: " . $result->dueDate()?->format('d-m-Y') . "\n";
    echo "Reference: " . $result->reference() . "\n";
    echo "\n---------------------------------------------------------------------- \n";
    foreach($result->lines()  as $item) {
        echo "| {$item->getProductCode()}\t | {$item->getDescription()}\t | {$item->getQuantity()}\t | {$item->getUnitPrice()}\t | {$item->getTaxRate()}\t | {$item->getTaxeAmount()}\t | {$item->getTotalAmount()}\t |\n";
    }
    echo "\n---------------------------------------------------------------------- \n";
    echo "Total: " . $result->totalGross() . "\n";
    echo "Total net: " . $result->totalNet() . "\n";


} catch (Exception $e) {
    echo 'Exception when calling PredictApi->productsMindeeFinancialDocumentVersionPredictPost: ', $e->getMessage(), PHP_EOL;
}
