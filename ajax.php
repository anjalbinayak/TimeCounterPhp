<?php
require 'vendor/autoload.php';
use Binayak\Counter;

$counter = new Counter();
$counter->connect()->calculate();
?>