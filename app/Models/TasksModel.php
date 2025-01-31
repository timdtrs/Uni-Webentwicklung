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

    public function getBoardsundTasks($boardsid = 0)
    {

        $this->tasks = $this->db->table('spalten');

        $this->tasks->select('boards.id as boardsid, boards.board, spalten.id as spaltenid, spalten.spalte, spalten.spaltenbeschreibung,        
                                    group_concat(
                                       JSON_OBJECT(
                                            "tasksid", tasks.id,                                            
                                            "taskssortid", tasks.sortid,
                                            "personenid", tasks.personenid,
                                            "person", concat(personen.vorname, " ", personen.name),
                                            "personenkuerzel", concat(left(personen.vorname,1), left(personen.name,1)),
                                            "taskartenid", tasks.taskartenid,
                                            "taskkontaktdatum", tasks.kontaktdatum,
                                            "taskerinnerungsdatum", tasks.erinnerungsdatum,
                                            "taskerinnerung", tasks.erinnerung,
                                            "taskart", taskarten.taskart,
                                            "taskartenicon", taskarten.taskartenicon,
                                            "task", tasks.task,
                                            "notizen", tasks.notizen,
                                            "geloescht", tasks.geloescht,
                                            "vordergrundfarbe", personen.vordergrundfarbe,
                                            "hintergrundfarbe", personen.hintergrundfarbe,
                                            "suchtext", tasks.task, " ",
                                            DATE_FORMAT(tasks.kontaktdatum, "%d.%m.%Y") , " ", DATE_FORMAT(tasks.erinnerungsdatum, "%d.%m.%y"))                                       
                                       ORDER BY tasks.sortid ASC ) as tasks');

        $this->tasks->join('tasks', 'tasks.spaltenid = spalten.id', 'left');
        $this->tasks->join('taskarten', 'tasks.taskartenid = taskarten.id', 'left');
        $this->tasks->join('boards', 'boards.id = spalten.boardsid', 'left');
        $this->tasks->join('personen', 'personen.id = tasks.personenid', 'left');

        if ($boardsid > 0)
            $this->tasks->where('spalten.boardsid', $boardsid);

        $this->tasks->groupBy('spalten.id');

        $result = $this->tasks->get();

        return $result->getResultArray();

    }
}