<?php

namespace App\Controllers;

use \App\Models\User;

class Account extends \Core\Controller
{
    /**
     * Validate if email is available (Ajax) for a new register.
     *
     * @return void
     */
    public function validateEmailAction()
    {
        $is_valid = ! User::emailTaken($_GET['email']);
        header('Content-Type: application/json');
        echo json_encode($is_valid);
    }
}
