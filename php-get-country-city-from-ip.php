<?php
    require_once 'vendor/autoload.php';
    use GeoIp2\Database\Reader;

    $reader = new Reader('/Users/alex/code/unbiased/php-detect-country-from-ip/GeoLite2-City.mmdb');

    $ip_list = array(
        '8.8.8.8',
        '1.1.1.1',
        '139.178.84.217',
    );
    foreach ($ip_list as $ip){
        $record = $reader->city($ip);

        print("Information for IP: $ip\n");

        print("Country Short Code: " . $record->country->isoCode . "\n"); 
        print("Country Name: " . $record->country->name . "\n"); 

        print("Latitude: ". $record->location->latitude ." \n"); 
        print("Longitude: ". $record->location->longitude ."\n");
        print ("====================================\n");
    }