<?php


namespace Core;

use pmill\Auth\Authenticate;

/**
 * Class Auth Facade for Authenticate
 *
 * @method static isLoggedIn
 * @method static login
 * @method static loginUser
 * @method static getLoggedInUserId
 * @method static logout
 *
 * @package Core
 */
class Auth
{
    private static $auth;

    public static function __callStatic($name, $arguments)
    {
        if(!isset(self::$auth)) self::$auth = new Authenticate();

        if(method_exists(self::$auth, $name))
        {
            call_user_func([self::$auth, $name], $arguments);
        }
    }
}