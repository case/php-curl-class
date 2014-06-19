<?php
require '../src/Curl/Curl.php';

use \Curl\Curl;

$curl = new Curl();
$curl->get('https://domai.nr/api/json/search', array(
    'q' => 'example',
    'client_id' => 'php_zachborboa',
));

foreach ($curl->response->results as $result) {
    echo $result->domain . ' is ' . $result->availability . '.' . "\n";
}
