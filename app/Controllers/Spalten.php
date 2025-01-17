<?php

namespace App\Controllers;

use App\Models\SpaltenModel;

class Spalten extends BaseController
{
    public function index()
    {
        $spaltenModel = new SpaltenModel();
        $data['spalten'] = $spaltenModel->getSpaltenByBoard();

        if (empty($data['spalten'])) {
            echo "Keine Spalten gefunden.";
            return;
        }

        echo view('templates/header');
        echo view('templates/nav');
        echo view('spalten', $data);
        echo view('templates/footer');
    }
}


