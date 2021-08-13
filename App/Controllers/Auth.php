<?php

namespace App\Controllers;

use App\Authentication;
use Core\View;
use \App\Models\User;

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
     * Enter by login
     *
     * @return void
     */
    public function enterAction()
    {
        $user = User::authenticate($_POST['email'], $_POST['password']);
        if ($user) {
            Authentication::login($user);
            $this->redirect(Authentication::getReturnToPage());
        } else {
            View::render('Auth/login.php', [
                'email' => $_POST['email'],
            ]);
        }
    }

    /**
     * Log out a user
     *
     * @return void
     */
    public function logoutAction()
    {
        Authentication::logout();
        $this->redirect('/auth/login');
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

    /**
     * Create new user
     *
     * @return void
     */
    public function createAction()
    {
        $user = new User($_POST);
        if ($user->save()) {
            $this->redirect('/auth/success');
        } else {
            View::render('Auth/register.php', [
                'user' => $user
            ]);
        }
    }

    /**
     * Show the register success page
     *
     * @return void
     */
    public function successAction()
    {
        View::render('Auth/success.php');
    }
}
