<?php
require_once __DIR__ . '/vendor/autoload.php';

use Esen\Hurriyet;
$hurriyet = new Hurriyet('your-api-token');
//// List id = 40530799 Columns  //
//$arr = [
//    'id' => '40531109'
//];
//$data = $hurriyet->get('columns', $arr);
//var_dump($data);

//// Filtered columns list //
$arr = [
'select' => 'Title,Id',
'top'  => '10'
];
$data = $hurriyet->get('columns', $arr);
var_dump($data);