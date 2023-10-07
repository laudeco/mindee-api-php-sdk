<?php

namespace Laudeco\Mindee;

use Laudeco\Mindee\Client\FinancialDocumentClient;
use Laudeco\Mindee\Client\InvoiceClient;
use Laudeco\Mindee\Client\MindeeClientInterface;
use Laudeco\Mindee\Client\PassportClient;
use Laudeco\Mindee\Client\ReceiptClient;
use Laudeco\Mindee\Domain\Authentication\AuthenticationInterface;

final class MindeeClientFactory
{
    public static function financialDocument(AuthenticationInterface $authentication): FinancialDocumentClient
    {
        return new FinancialDocumentClient($authentication);
    }


}
