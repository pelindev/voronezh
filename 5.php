<?php

require 'vendor/autoload.php';

function getCityByIP($ip) {
    require_once 'config.php';
    $token = $config['api_key'];
    $dadata = new \Dadata\DadataClient($token, null);
    $response = $dadata->iplocate($ip);

    return $response['value'];
}

$clientIp = '46.226.227.20';
echo getCityByIP($clientIp);
