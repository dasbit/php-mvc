<?php

require dirname(__DIR__) . '/bootstrap/bootstrap.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\QueryException;

try{
    Capsule::schema()->dropIfExists('users');

    echo 'users table dropped' . PHP_EOL;
}
catch (Illuminate\Database\QueryException $e){
    echo $e->getMessage() . PHP_EOL;
}
