<?php

namespace App\Controllers;

use App\Models\BoardModel;
use App\Models\SpaltenModel;
use App\Models\TasksModel;

class Home extends BaseController
{

    public function index()
    {
        $tasksmodel = new TasksModel();
        $spaltenmodel = new SpaltenModel();
        $boardmodel = new BoardModel();
        $boardid = '1';
        $data['boards'] = $boardmodel->getData($boardid);
        $data['spalten'] = $spaltenmodel->getByBoard($boardid);
        $data['tasks'] = $tasksmodel->getData();

        echo view('templates/header');
        echo view('templates/nav');
        echo view('tasks', $data);
        echo view('templates/footer');
    }

    public function spalten()
    {
        $spaltenmodel = new SpaltenModel();
        $data['spalten'] = $spaltenmodel->getData();

        echo view('templates/header');
        echo view('templates/nav');
        echo view('spalten', $data);
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
