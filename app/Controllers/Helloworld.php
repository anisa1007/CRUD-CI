<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index($name, $npm)
    {
        // echo $this->name;
        echo $name . "<br>";
        echo $npm . "<br>";
        // echo "Hello Anisa";
    }

    public function show()
    {
        echo "Anisa Raden<br>";
        echo "1817051007";
    }
}
