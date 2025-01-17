<?php

namespace App\Models;

use CodeIgniter\Model;

class SpaltenModel extends Model
{
    protected $table = 'spalten';
    protected $allowedFields = ['id', 'board', 'sortid', 'name', 'beschreibung'];

    public function getSpaltenByBoard($boardId = null)
    {
        $this->spalten = $this->db->table('spalten');
        $this->spalten->select('spalten.id, boards.name as board_name, spalten.sortid, spalten.name as spalte, spalten.beschreibung');
        $this->spalten->join('boards', 'boards.id = spalten.board');

        if ($boardId !== null) {
            $this->spalten->where('spalten.board', $boardId);
        }

        $this->spalten->orderBy('spalten.sortid', 'ASC');
        $result = $this->spalten->get();

        return $result->getResultArray();
    }
}

