<?php


namespace App\Controllers;


use App\Models\SpaltenModel;
use App\Models\TasksModel;

class Spalten extends BaseController
{
    public function getcrud_edit($todo, $id = null)
    {
        if ($todo != 0) {
            $data['todo'] = $todo;
            $spaltenmodel = new SpaltenModel();
            $data['spalten'] = $spaltenmodel->getData($id);
        } else {
            $data['todo'] = 0;
            $data['spalten'] = [];
        }
        echo view('templates/header');
        echo view('templates/nav');
        echo view('spalten_edit', $data);
        echo view('templates/footer');
    }


    public function postsubmit_edit($todo)
    {
        if ($this->validation->run($_POST, 'spalten')) {
            $spaltenmodel = new SpaltenModel();
            $data = [
                'boardsid' => 1,
                'spalte' => $_POST['spalte'],
                'sortid' => $_POST['sortid'],
                'spaltenbeschreibung' => $_POST['spaltenbeschreibung']
            ];


            // 0 => Hinzufügen
            if ($todo == '0') {
                $spaltenmodel->insert($data);

            }

            // 1 => Update
            if ($todo == '1') {
                $spaltenmodel->update($_POST['spaltenid'], $data);
            }

            // 2 => Delete
            if ($todo == '2') {
                $spaltenmodel->where('spaltenid', $_POST['spaltenid'])->delete();
            }
            return redirect()->to('/spalten');
        } else {
            $data['spalten'][0] = $_POST;
            $data['todo'] = $todo;
            $data['error'] = $this->validation->getErrors();
            echo view('templates/header');
            echo view('templates/nav');
            echo view('spalten_edit', $data);
            echo view('templates/footer');
        }


    }

}
