<?php

namespace App\Controllers;

use Core\View;

class Auth extends \Core\Controller
{
    /**
     * Show the login page
     *
     * @return void
     */
    public function loginAction()
    {
        View::render('Auth/login.php');
    }

    /**
     * Show the register page
     *
     * @return void
     */
    public function registerAction()
    {
        View::render('Auth/register.php');
    }
}
