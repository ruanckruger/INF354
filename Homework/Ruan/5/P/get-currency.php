<?php
    $client = new SoapClient("http://www.webservicex.net/country.asmx?WSDL");
    // $result = $client->GetCurrencyByCountry($_POST["country_name"]);
    $cName = $_GET["country_name"];
    // echo $cName;
    
    // $params = array('step' => 'CountryName', 'value' => $cName);
    // $result = $client->__soapCall('GetCurrencyByCountry', array('parameters' => $params));
    $params = array('CountryName' => $_GET["country_name"]);
    $result = $client->__soapCall('GetCurrencyByCountry', array('parameters' => $params));
    // $result = $client->GetCurrencyByCountry();

    $jsonObj = json_encode($result);
    foreach ($result as $currency) {
        # code...
        // echo "country Name " . $country;
        $xml = simplexml_load_string($currency);
        $json = json_encode($xml);
    }
    echo $json;

?>