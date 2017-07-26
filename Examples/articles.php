<?php
require_once __DIR__ . '/vendor/autoload.php';

use Esen\Hurriyet;
$hurriyet = new Hurriyet('your api token');

// List id = 40530799 Article //
$arr = [
    'id' => '40530799'
];
$data = $hurriyet->get('articles', $arr);
var_dump($data);

// Filtered article list //
$arr = [
    'select' => 'Title,Id',
    'top'  => '10'
];
$data = $hurriyet->get('articles', $arr);
var_dump($data);