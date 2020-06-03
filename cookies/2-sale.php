<?php

$now = time();

if (!isset($_COOKIE['impsystemtime'])) {
    setcookie('impsystemtime', $now, $now + 3600*24);
}


$first = $_COOKIE['impsystemtime'] ?? $now;
$dif = $now - $first;

$saleTime = 3600 - $dif;

echo $saleTime;