<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskartenModel extends Model
{
    public function getData()
    {
        $this->taskarten = $this->db->table('taskarten');
        $this->taskarten->select('*');
        $result = $this->taskarten->get();

        return $result->getResultArray();
    }
}