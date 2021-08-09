<?php

namespace App\Controllers;

use Core\View;

class Post extends \Core\Controller
{
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::render('Post/index.php');
    }
}
