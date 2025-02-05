<?php

namespace App\Controllers;

use App\Models\BoardModel;
use App\Models\SpaltenModel;
use App\Models\TasksModel;

class Home extends BaseController
{

    public function index()
    {
        $boardsmodel = new BoardModel();
        $boards = $boardsmodel->getData();
        $id = $boards[0]['id'];
        return redirect()->to('Tasks/tasks/' . $id);
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
