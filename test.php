<?php
include('src/dirtyAPI.php');
$dAPI = new \pxgamer\dirtyAPI();
var_dump($dAPI);
$response = \pxgamer\dirtyAPI::html('<a href="https://github.com/">GitHub</a>');
var_dump($response);