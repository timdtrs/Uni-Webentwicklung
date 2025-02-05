<?php

namespace App\Controllers;

use App\Models\BoardModel;
use App\Models\PersonenModel;

class Boards extends BaseController
{

    public function getindex()
    {
        $boardModel = new BoardModel();
        $data['boards'] = $boardModel->findAll();
        echo view('templates/header');
        echo view('templates/nav');
        echo view('boards', $data);
        echo view('templates/footer');
    }

    public function getedit($id)
    {
        $boardModel = new BoardModel();
        $data['board'] = $boardModel->find($id);
        if (!$data['board']) {
            return redirect()->to('/boards')->with('error', 'Board nicht gefunden.');
        }
        echo view('templates/header');
        echo view('templates/nav');
        echo view('boards_edit', $data);
        echo view('templates/footer');
    }

    public function postupdate($id)
    {
        // Validierung der Eingaben
        $validation = \Config\Services::validation();
        $validation->setRules([
            'board' => 'required|max_length[255]', // Bezeichnung ist erforderlich
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validierung fehlgeschlagen
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Board-Daten aktualisieren
        $boardModel = new BoardModel();
        $boardModel->update($id, ['board' => $this->request->getPost('board')]);

        // Erfolgsmeldung und Weiterleitung
        return redirect()->to('/boards')->with('success', 'Board erfolgreich aktualisiert.');
    }

    public function postdelete($id)
    {
        $boardModel = new BoardModel();

        // Überprüfen, ob das Board existiert
        $board = $boardModel->find($id);
        if (!$board) {
            return redirect()->to('/boards')->with('error', 'Board nicht gefunden.');
        }

        // Board löschen
        $boardModel->delete($id);

        // Erfolgsmeldung und Weiterleitung
        return redirect()->to('/boards')->with('success', 'Board erfolgreich gelöscht.');
    }

    public function getcreate()
    {
        // Formular zum Anlegen eines neuen Boards anzeigen
        echo view('templates/header');
        echo view('templates/nav');
        echo view('boards_create'); // Formular-View
        echo view('templates/footer');
    }

    public function postsubmit()
    {
        // Daten aus dem Formular holen
        $boardName = $this->request->getPost('board');

        // Validierung der Eingaben
        $validation = \Config\Services::validation();
        $validation->setRules([
            'board' => 'required|max_length[255]', // Board-Name ist erforderlich
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validierung fehlgeschlagen
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Board in der Datenbank speichern
        $boardModel = new BoardModel();
        $boardModel->insert(['board' => $boardName]); // Daten an das Model übergeben

        // Erfolgsmeldung und Weiterleitung
        return redirect()->to('/boards')->with('success', 'Board erfolgreich angelegt.');
    }

}
