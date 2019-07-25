<?php

require 'constants.php';

/**
 * Checks .env file
 */

if(!file_exists(BASE_PATH . '/.env'))
{
    die('.env not exists');

}

/**
 * Helper functions
 */
require dirname(__DIR__) . '/bootstrap/helpers.php';

/**
 * Autoloading vendor classes
 */
require dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Env load
 */
$dotenv = \Dotenv\Dotenv::create(BASE_PATH);

$dotenv->load();

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

/**
 * Configures database
 */
$capsule = new Illuminate\Database\Capsule\Manager;

$capsule->addConnection([

    "driver" => "mysql",

    "host" => env('DB_HOST'),

    "database" => env('DB_DATABASE'),

    "username" => env('DB_USERNAME'),

    "password" => env('DB_PASSWORD')

]);

//Make this Capsule instance available globally.
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();

/**
 * Starting session
 */
session_start();