<?php


namespace App\Controllers;


use App\Models\BoardModel;
use App\Models\PersonenModel;
use App\Models\SpaltenModel;
use App\Models\TaskartenModel;
use App\Models\TasksModel;

class Tasks extends BaseController
{
    public function gettasks($id = 1)
    {
        $tasksmodel = new TasksModel();
        $spaltenmodel = new SpaltenModel();
        $boardmodel = new BoardModel();
        $boardid = $id;
        $data['boards'] = $boardmodel->getData();
        $data['board'] = $boardmodel->getData($boardid);
        $spalten = $spaltenmodel->getByBoard($boardid);
        foreach ($spalten as $index => $spalt) {
            $tasks = $tasksmodel->getBySpalt($spalt['spaltenid']);
            $spalten[$index]['tasks'] = $tasks;
        }

        $data['spalten'] = $spalten;

        echo view('templates/header');
        echo view('templates/nav');
        echo view('tasks', $data);
        echo view('templates/footer');
    }

    public function getcrud_edit($todo, $id = null, $spalte = null)
    {
        if ($todo != 0) {
            $data['todo'] = $todo;
            $tasksmodel = new TasksModel();
            $data['tasks'] = $tasksmodel->getData($id);
        } else {
            $data['todo'] = 0;
            $data['tasks'] = [];
        }

        $spaltenmodel = new SpaltenModel();
        $personenmodel = new PersonenModel();
        $taskartenmodel = new TaskartenModel();
        $spalten = $spaltenmodel->getData();
        $personen = $personenmodel->getData();
        $taskarten = $taskartenmodel->getData();

        $data['spalten'] = $spalten;
        $data['personen'] = $personen;
        $data['taskarten'] = $taskarten;

        $data['spalte'] = $spalte;


        echo view('templates/header');
        echo view('templates/nav');
        echo view('task_edit', $data);
        echo view('templates/footer');
    }


    public function postsubmit_edit($todo)
    {

        // 0 => Hinzufügen
        if ($todo == '0') {
            $data = [
                'task' => $_POST['task_bezeichnung'],
                'personenid' => $_POST['personen_id'],
                'spaltenid' => $_POST['spalten_id'],
                'taskartenid' => $_POST['taskart_id'],
                'notiz' => $_POST['notiz'],
                'erstellungsdatum' => $_POST['erinnerungsdatum'],
                'erinnerungsdatum' => $_POST['erinnerungsdatum'],
                'deadline' => $_POST['erinnerungsdatum'],
                'sortid' => 1,
                'erledigt' => 0,
                'geloescht' => 0
            ];
            $tasksModel = new TasksModel();
            $tasksModel->insert($data);

        }

        // 1 => Update
        if ($todo == '1') {
            $data = [
                'task' => $_POST['task_bezeichnung'],
                'personenid' => $_POST['personen_id'],
                'spaltenid' => $_POST['spalten_id'],
                'taskartenid' => $_POST['taskart_id'],
                'notiz' => $_POST['notiz'],
                'erstellungsdatum' => $_POST['erinnerungsdatum'],
                'erinnerungsdatum' => $_POST['erinnerungsdatum'],
                'deadline' => $_POST['erinnerungsdatum'],
                'sortid' => 1,
                'erledigt' => 0,
                'geloescht' => 0
            ];
            $tasksModel = new TasksModel();
            $tasksModel->update($_POST['id'], $data);
        }

        // 2 => Delete
        if ($todo == '2') {
            $tasksModel = new TasksModel();
            $tasksModel->where('id', $_POST['id'])->delete();
        }

        return redirect()->to('/');
    }

}