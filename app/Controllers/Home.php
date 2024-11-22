<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        echo view('templates/header');
        echo view('templates/nav');
        echo view('tasks');
        echo view('templates/footer');
    }

    public function spalten()
    {
        echo view('templates/header');
        echo view('templates/nav');
        echo view('spalten');
        echo view('templates/footer');
    }

    public function spalten_erstellen()
    {
        echo view('templates/header');
        echo view('templates/nav');
        echo view('erstellen');
        echo view('templates/footer');
    }

}
