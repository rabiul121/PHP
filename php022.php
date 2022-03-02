<?php
$default_lat = 23.9;
$default_lon = 90.8;

$user_lat;

// $lat = isset($user_lat) ? $user_lat : $default_lat;
// echo $lat . "\n";

// Null-Coalesce Operator
// Only available in PHP 7 or later
$lat = $user_lat ?? $default_lat;
echo $lat . "\n";
