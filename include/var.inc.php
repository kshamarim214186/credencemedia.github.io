<?php
error_reporting(0);
define('BASE_URL', 'http://localhost/credencemedia.com/');
$useragent = $_SERVER["HTTP_USER_AGENT"]; 

if(stripos($useragent, "mobile")!== false){
    $device = "mobile";
}else{
    $device = "desktop";
}
?>