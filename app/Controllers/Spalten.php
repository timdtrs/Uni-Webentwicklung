<?php


namespace App\Controllers;


use App\Models\SpaltenModel;
use App\Models\TasksModel;

class Spalten extends BaseController
{
    public function getcrud_edit($todo, $id = null)
    {
        $boardModel = new \App\Models\BoardModel();
        $data['boards'] = $boardModel->findAll();

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
        // Wenn es nicht das Löschen (todo == 2) ist, wird die Validierung ausgeführt
        if ($todo != '2' && !$this->validation->run($_POST, 'spalten')) {
            // Validierung fehlgeschlagen
            $data['spalten'][0] = $_POST;
            $data['todo'] = $todo;
            $data['error'] = $this->validation->getErrors();

            $boardModel = new \App\Models\BoardModel();
            $data['boards'] = $boardModel->findAll();

            echo view('templates/header');
            echo view('templates/nav');
            echo view('spalten_edit', $data);
            echo view('templates/footer');
            return;
        }

        // Spaltenmodel-Instanz erstellen
        $spaltenmodel = new SpaltenModel();

        // Initialisiere das $data-Array
        $data = [
            'spalte' => isset($_POST['spalte']) ? $_POST['spalte'] : '',  // Überprüfe, ob 'spalte' gesetzt ist
            'sortid' => isset($_POST['sortid']) ? $_POST['sortid'] : '',  // Überprüfe, ob 'sortid' gesetzt ist
            'spaltenbeschreibung' => isset($_POST['spaltenbeschreibung']) ? $_POST['spaltenbeschreibung'] : ''  // Überprüfe, ob 'spaltenbeschreibung' gesetzt ist
        ];

        // Füge 'boardsid' hinzu, falls es gesetzt wurde
        if (isset($_POST['boardsid'])) {
            $data['boardsid'] = $_POST['boardsid'];
        }

        // Je nach todo-Wert die entsprechende Aktion ausführen
        if ($todo == '0') {
            // Hinzufügen
            $spaltenmodel->insert($data);
        } elseif ($todo == '1') {
            // Aktualisieren
            $spaltenmodel->update($_POST['spaltenid'], $data);
        } elseif ($todo == '2') {
            // Löschen, keine Validierung notwendig
            if (isset($_POST['spaltenid']) && !empty($_POST['spaltenid'])) {
                $spaltenmodel->where('spaltenid', $_POST['spaltenid'])->delete();
            } else {
                // Wenn keine spaltenid gesetzt ist, Fehler werfen
                throw new \Exception('Spalten-ID nicht gefunden oder leer.');
            }
        }

        return redirect()->to('/spalten');
    }

}
