<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        echo view('templates/header');
        echo view('templates/nav');
        echo view('body');
        echo view('templates/footer');
    }


}
