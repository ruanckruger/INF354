<?php
//http://www.webservicex.net/CurrencyConvertor.asmx?WSDL
$from = $_GET["from"];
$to = $_GET["to"];

// $client = new SoapClient("http://www.webservicex.net/CurrencyConvertor.asmx?WSDL");
// $params = array('FromCurrency' => $from,'ToCurrency' => $to);
// $result = $client->__soapCall('ConversionRate', array('parameters' => $params));

//http://currencyconverter.kowabunga.net/converter.asmx
// echo date("Y/d/m");
$client = new SoapClient("http://currencyconverter.kowabunga.net/converter.asmx?WSDL");
$params = array('CurrencyFrom' => $from,'CurrencyTo' => $to, 'RateDate' => date("Y-m-d"));
// 2010-05-24T18:13:00
$result = $client->__soapCall('GetConversionRate', array('parameters' => $params));


// echo $result;
// $jsonObj = json_encode($result);
foreach ($result as $currency) {
    # code...
    // echo "country Name " . $country;
    // $xml = simplexml_load_string($currency);
    // $json = json_encode($currency);
    echo $currency;
}
// echo $json;
?>