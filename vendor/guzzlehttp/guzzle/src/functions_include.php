<?php

// Don't redefine the functions if included multiple times.
if (!function_exists('GuzzleHttp\uri_template')) {
    var_dump('requiring functions.php');
    require __DIR__ . '/functions.php';
}
var_dump('function_includes running');
if (!function_exists('GuzzleHttp\_idn_uri_convert')) {
    require __DIR__ . '/functions.php';
}
