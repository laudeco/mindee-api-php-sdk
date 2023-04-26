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

    public static function invoice(AuthenticationInterface $authentication): MindeeClientInterface
    {
        return new InvoiceClient($authentication);
    }

    public static function receipt(AuthenticationInterface $authentication): MindeeClientInterface
    {
        return new ReceiptClient($authentication);
    }

    public static function passport(AuthenticationInterface $authentication): MindeeClientInterface
    {
        return new PassportClient($authentication);
    }

    public static function financialDocument(AuthenticationInterface $authentication): MindeeClientInterface
    {
        return new FinancialDocumentClient($authentication);
    }


}