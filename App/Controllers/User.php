<?php

namespace App\Controllers;

use Core\View;

class User extends \Core\Controller
{
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