<?php

require_once __DIR__ . '/../vendor/autoload.php';

 use App\Model\Country;

$county = new Country();

echo $county->find();
