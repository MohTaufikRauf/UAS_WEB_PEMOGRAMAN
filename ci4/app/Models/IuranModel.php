<?php

namespace App\Models;

use CodeIgniter\Model;

class IuranModel extends Model
{
    protected $table = 'iuran';
    protected $primaryKey = 'id_antrean';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['keterangan', 'tanggal', 'bulan', 'tahun', 'jumlah','warga_id'];
}