<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
     public function index(): string
    {
        return view('user/landing');
    }
    
    public function login(): string
    {
        return view('user/loginPage');
    }

    public function signup(): string
    {
        return view('user/signupPage');
    }
}
