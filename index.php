<?php

require 'vendor/autoload.php';
require '_define.php';
require 'Helper.php';
require 'Mikrotik.php';

try {
    $res = Mikrotik::execute();

    if (count($res) == 0) {
        throw new Exception("Ping tidak ada respond", 1);
    }

    $pings = [];
    foreach ($res as $key => $row) {
        $pings[] = [
            'packet-loss' => $row['packet-loss'],
            'avg-rtt' => $row['avg-rtt']
        ];
    }

    $endLine = end($pings);

    if ($endLine['packet-loss'] == 100) {
        $average = "500";
    } else {
        $average = trim($endLine['avg-rtt'], "ms");
        $average = Helper::ms($average);
    }

    $params = [
        'avg' => $average,
        'loss' => $endLine['packet-loss'],
        'site' => SITE,
    ];

    Helper::post($params);
} catch (Exception $e) {
    throw $e->getMessage();
}
