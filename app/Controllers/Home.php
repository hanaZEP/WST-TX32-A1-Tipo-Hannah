<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function landing(): string
    {
        return view('landingPage');
    }

    public function about(): string
    {
        return view('aboutPage');
    }

    public function info(): string
    {
        return view('infoPage');
    }
}
