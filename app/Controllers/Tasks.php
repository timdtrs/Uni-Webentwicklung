<?php


namespace App\Controllers;


use App\Models\TasksModel;

class Tasks extends BaseController
{
    public function getcrud_edit($todo, $id = null)
    {
        if ($todo != 0) {
            $data['todo'] = $todo;
            $tasksmodel = new TasksModel();
            $data['tasks'] = $tasksmodel->getData($id);
        } else {
            $data['todo'] = 0;
            $data['tasks'] = [];
        }
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
            $tasksModel->delete($_POST['id']);
        }


        return redirect()->to('/');
    }

}
