<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{ 
    public function signup(): string
    {
        return view('user/signupPage');
    }
    public function index(): string
    {
        return view('welcome_message');
    }
}


