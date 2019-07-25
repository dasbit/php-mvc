<?php

require dirname(__DIR__) . '/bootstrap/bootstrap.php';

use Illuminate\Database\Capsule\Manager as Capsule;

try{
    Capsule::schema()->create('users', function ($table) {

        $table->increments('id');

        $table->string('name');

        $table->string('email')->unique();

        $table->string('password');

        $table->timestamps();
    });

    echo 'users table created'. PHP_EOL;
}
catch (Illuminate\Database\QueryException $e){
    echo $e->getMessage() . PHP_EOL;
}
