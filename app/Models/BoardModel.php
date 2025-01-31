<?php

namespace App\Models;

use CodeIgniter\Model;

class BoardModel extends Model
{
    protected $table = 'boards';
    protected $allowedFields = ['id, board'];
    protected $primaryKey = 'id';

    public function getData($id = null)
    {
        if ($id == null) {
            $this->boards = $this->db->table($this->table);
            $this->boards->select('*');
            $result = $this->boards->get();
            return $result->getResultArray();
        } else {
            $this->boards = $this->db->table($this->table);
            $this->boards->select('*');
            $this->boards->where('id', $id);
            $result = $this->boards->get();
            return $result->getResultArray();
        }
    }
}
