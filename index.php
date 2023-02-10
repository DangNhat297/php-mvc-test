<?php 

require_once './vendor/autoload.php';

$url = isset($_GET['url']) ? strtolower($_GET['url']) : "/";

Route::run($url);