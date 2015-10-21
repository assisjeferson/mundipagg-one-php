<?php

require_once(dirname(__FILE__) . '/../init.php');

try
{
    // Define o ambiente utilizado (produção ou homologação)
    \MundiPagg\ApiClient::setEnvironment(\MundiPagg\One\DataContract\Enum\ApiEnvironmentEnum::TRANSACTION_REPORT);

    // Define a chave da loja
    \MundiPagg\ApiClient::setMerchantKey("merchantKey");

    //Cria um objeto ApiClient
    $client = new MundiPagg\ApiClient();

    // Faz a chamada para criação
    $response = $client->SearchTransactionReportFile('20150928');

    // Imprime responsta
    print "<pre>";
    var_dump($response);
    print "</pre>";
}
catch (\MundiPagg\One\DataContract\Report\ApiError $error)
{
    // Imprime json
    print "<pre>";
    print ($error);
    print "</pre>";
}
catch (Exception $ex)
{
    // Imprime json
    print "<pre>";
    print ($ex);
    print "</pre>";
}