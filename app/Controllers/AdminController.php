<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function admin(): string
    {
        return view('welcome_message');
    }
}
