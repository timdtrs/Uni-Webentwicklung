<?php

namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model
{
    protected $table = 'tasks';
    protected $allowedFields = ['id', 'personenid', 'spaltenid', 'taskartenid', 'task', 'notiz', 'erinnerungsdatum', 'erstellungsdatum', 'deadline', 'sortid', 'erledigt', 'geloescht'];

    public function getData($id = null)
    {
        if ($id == null) {
            $this->tasks = $this->db->table('tasks');
            $this->tasks->select('*');
            $this->tasks->orderBy('task', 'ASC');
            $result = $this->tasks->get();
            return $result->getResultArray();
        } else {
            $this->tasks = $this->db->table('tasks');
            $this->tasks->select('*');
            $this->tasks->where('id', $id);
            $result = $this->tasks->get();
            return $result->getResultArray();
        }
    }

    public function getBySpalt($id = null)
    {
        $this->tasks = $this->db->table('tasks');
        $this->tasks->select('*');
        $this->tasks->join('personen', 'personen.personenid = tasks.personenid', 'left');
        $this->tasks->join('taskarten', 'taskarten.taskartid = tasks.taskartenid', 'left');
        $this->tasks->where('spaltenid', $id);
        $result = $this->tasks->get();
        return $result->getResultArray();
    }
}