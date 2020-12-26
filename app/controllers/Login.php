<?php

namespace App\Controllers;

class Login extends Controller
{

    /**
     * Define template file.
     *
     * @return string
     */
    public function index()
    {
        $this->view('login/login');
    }
}
