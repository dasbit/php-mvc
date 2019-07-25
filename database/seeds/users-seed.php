<?php

require dirname(__DIR__) . '/../bootstrap/bootstrap.php';

use App\Models\User;

try{
    User::create([
        'name' => 'Admin',
        'email' => 'admin@admin.admin',
        'password' => 'admin'
    ]);

    echo 'user created';
}
catch (Exception $exception){
    echo 'user exists';
};
