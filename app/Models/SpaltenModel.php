<?php

namespace App\Models;

use CodeIgniter\Model;

class SpaltenModel extends Model
{
    protected $table = 'spalten';
    protected $allowedFields = ['spaltenid', 'boardsid', 'spalte', 'sortid', 'spaltenbeschreibung'];
    protected $primaryKey = 'spaltenid';

    public function getData($id = null)
    {
        if ($id == null) {
            $this->spalten = $this->db->table($this->table);
            $this->spalten->select('*');
            $this->spalten->join('boards', 'boards.id = spalten.boardsid');
            $this->spalten->orderBy('spalte', 'ASC');
            $result = $this->spalten->get();
            return $result->getResultArray();
        } else {
            $this->spalten = $this->db->table($this->table);
            $this->spalten->select('*');
            $this->spalten->where('spaltenid', $id);
            $result = $this->spalten->get();
            return $result->getResultArray();
        }
    }
}