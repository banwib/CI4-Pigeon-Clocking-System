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
    
    public function moodBoard(): string
    { 
        return view('user/moodboardPage');
    }
    
    public function roadmap(): string
    {
        return view('user/roadmapPage');
    }
    
    public function login(): string
    {
        return view('user/loginPage');
    }
    
    public function signup(): string
    {
        return view('user/signupPage');
    }
    
    public function processLogin()
    {
        // For now, just redirect to mood board after "login"
        return redirect()->to('/moodboardPage');
    }
    
    public function processSignup()
    {
        // For now, just redirect to mood board after "signup"
        return redirect()->to('/moodboardPage');
    }
}
