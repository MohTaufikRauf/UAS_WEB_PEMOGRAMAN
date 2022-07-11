<?php

namespace App\Models;

use CodeIgniter\Model;

class RtModel extends Model
{
    protected $table = 'warga';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['Id', 'Nik', 'Nama', 'Kelamin', 'Alamat', 'No_rumah', 'Status'];
}