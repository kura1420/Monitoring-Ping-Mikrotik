<?php

require 'vendor/autoload.php';

use \RouterOS\Client;
use \RouterOS\Query;

class Mikrotik
{
    public static function execute()
    {
        $client = new Client([
            'host' => HOST,
            'user' => USER,
            'pass' => PASS,
            'port' => PORT,
        ]);

        $query = new Query('/ping');
        $query->equal('address', TARGET);
        $query->equal('count', 3);
        $query->equal('size', 64);
        $query->equal('interval', '00:00:00.250');

        $res = $client->query($query)->read();

        return $res;
    }
}
