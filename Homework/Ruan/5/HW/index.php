<?php
    // client.php
    $options = array(
        'trace' => true
    );
    $client = new SOAPClient('http://localhost/modder_service.php?wsdl', $options);
    var_dump($client->TwoNumbersMod(['x' => 13, 'y' => 5])->Result);
?>