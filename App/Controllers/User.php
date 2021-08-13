<?php

namespace App\Controllers;

use App\Authentication;
use Core\View;

class User extends \Core\Controller
{
    /**
     * Require the user to be authenticated before giving access to all methods in the controller
     *
     * @return void
     */
    protected function before()
    {
        $this->requireLogin();
    }

    /**
     * Show the profile page
     *
     * @return void
     */
    public function profileAction()
    {
        View::render('User/profile.php');
    }
}
