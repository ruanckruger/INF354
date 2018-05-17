<?php
    require 'vendor/autoload.php';
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $collection = $client->ip2location->db11;
    $result = $collection->find();

    $counter = 0;
    foreach ($result as $entry) {
        if ($counter == 100){  
            break;
        }
        echo "<div class='result'>";
        echo "<h2 class='country'>" . $entry['country_name'] . '</h2>';
        echo "<h4 class='city'>" . $entry['city_name'] . '</h4>';
        echo "<p><b>Longitude &amp; Latitude:</b> " . $entry['longitude'] . "  " . $entry['latitude'] . '<br>';
        echo "<b>Time Zone:</b> " . $entry['time_zone'] . '</p>';
        echo "</div>";
        $counter++;
    }
?>