<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web Programming'
        ];

        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];

        echo view('pages/about', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];

        echo view('pages/login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register'
        ];

        echo view('pages/register', $data);
    }
}
