<?php


defined("APPLICATION_PATH") || define("APPLICATION_PATH", realpath(__DIR__));

include(APPLICATION_PATH . "/../lib/autoload.php");

$app = new \PWKWork\Application("formMain", "onload");