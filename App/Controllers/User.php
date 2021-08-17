<?php

namespace App\Controllers;

use App\Authentication;
use Core\View;

class User extends Authenticated
{
    /**
     * Show the profile page
     *
     * @return void
     */
    public function profileAction()
    {
        View::render('User/profile.php', [
            'user' => Authentication::getUser()
        ]);
    }

    /**
     * Edit the profile page
     *
     * @return void
     */
    public function editAction()
    {
        View::render('User/edit.php', [
            'user' => Authentication::getUser()
        ]);
    }

    /**
     * Update the profile
     *
     * @return void
     */
    public function updateAction()
    {
        $user = Authentication::getUser();
        if ($user->updateProfile($_POST)) {
            $this->redirect('/user/profile');
        } else {
            View::render('User/edit.php', [
                'user' => $user
            ]);
        }
    }
}
