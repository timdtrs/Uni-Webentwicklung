<?php

namespace App\Controllers;

use App\Models\TasksModel;

class Home extends BaseController
{

    public function index()
    {
        $tasksmodel = new TasksModel();
        $data['tasks'] = $tasksmodel->getData();
        echo view('templates/header');
        echo view('templates/nav');
        echo view('tasks', $data);
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
