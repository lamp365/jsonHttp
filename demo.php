<?php
ini_set('display_errors',1);
ini_set("error_repoting",'E_ALL');
include 'vendor/autoload.php';

$data = array('a','b','bnb');
$json = new \jsonHttp\Json();
echo $json->jsonEncode($data);
