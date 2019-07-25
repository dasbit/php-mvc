<?php

namespace App\Controllers;

use Core\Auth;
use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Main extends \Core\Controller
{
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Main/index.html');
    }

    /**
     * Shows logged page
     */
    public function loggedAction()
    {
        if (!Auth::isLoggedIn()){
            header('Location: '. app_url('login'));
        }

        View::renderTemplate('Main/logged.html');
    }

    public function loginAction()
    {
        View::renderTemplate('Main/logged.html');
    }
}
