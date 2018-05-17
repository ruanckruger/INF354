<?php
    $client = new SoapClient("http://www.webservicex.net/country.asmx?WSDL");
    $result = $client->GetCountries();
    // echo $result;
    $jsonObj = json_encode($result);
    foreach ($result as $country) {
        # code...
        // echo "country Name " . $country;
        $xml = simplexml_load_string($country);
        $json = json_encode($xml);
    }
    echo $json;
?>