<?php

namespace App\Controllers;

class Rumahsak extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Rumah Sakit'
        ];


        return view('rumahsak/index', $data);
    }
}
