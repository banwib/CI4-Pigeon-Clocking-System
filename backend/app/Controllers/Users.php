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
    public function roadmap(): string
    {
        return view('user/roadmapPage');
    }
}
