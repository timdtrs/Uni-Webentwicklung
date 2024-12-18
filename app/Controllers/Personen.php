<?php

namespace App\Controllers;

use App\Models\PersonenModel;

class Personen extends BaseController
{

    public function getindex()
    {
        $firstmodel = new PersonenModel();
        $data['personen'] = $firstmodel->getData();
        $data['test'] = 'Test';

        echo view('templates/header');
        echo view('templates/nav');
        echo view('personen', $data);
        echo view('templates/footer');
    }

}
