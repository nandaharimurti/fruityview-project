<?php

require __DIR__.'/../vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount(
        __DIR__.'/fruityview-b870e-firebase-adminsdk-fbsvc-6ee9fdfc3a.json'
    )
    ->withDatabaseUri(
        'https://fruityview-b870e-default-rtdb.asia-southeast1.firebasedatabase.app'
    );

$database = $factory->createDatabase();