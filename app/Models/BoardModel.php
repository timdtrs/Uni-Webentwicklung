<?php

namespace App\Models;

use CodeIgniter\Model;

class BoardModel extends Model
{
    protected $table = 'boards';
    protected $allowedFields = ['id, board'];
    protected $primaryKey = 'id';

}
