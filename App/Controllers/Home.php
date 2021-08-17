<?php

namespace App\Controllers;

use App\Authentication;
use Core\View;

class Home extends \Core\Controller
{
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::render('Home/index.php', [
            'user' => Authentication::getUser()
        ]);
    }
}
