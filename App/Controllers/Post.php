<?php

namespace App\Controllers;

use Core\View;

class Post extends \Core\Controller
{
    public function indexAction()
    {
        $posts = \App\Models\Post::getAll();
        View::render('Post/index.php', [
            'posts' => $posts
        ]);
    }
}
