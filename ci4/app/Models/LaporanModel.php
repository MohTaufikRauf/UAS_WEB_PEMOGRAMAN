<?php namespace App\Models;
use CodeIgniter\Model;
 
class LaporanModel extends Model
{
     
    public function getLaporan()
    {
         return $this->db->table('iuran')
         ->join('warga','warga.id=iuran.id_antrean')
         ->get()->getResultArray();  
    }

    function jumlah_nilai()
    {
        $this->db->select('SUM(jumlah) as total');
        $this->db->from('iuran');
        return $this->db->get()->row()->total;
    }
 }