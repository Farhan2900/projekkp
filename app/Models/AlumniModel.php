<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model
{
    protected $table            = 'tb_alumni';
    protected $primaryKey       = 'id_alumni';
    protected $returnType       = 'object';
    protected $allowedFields    = ['NIS','keterangan','tahun_keluar'];

    
    
    
    
    function getSiswa(){
        $builder = $this->db->table('tb_alumni');
        $builder->join('tb_registrasi', 'tb_registrasi.NIS = tb_alumni.NIS');
        $builder->join('tb_kelas', 'tb_kelas.id_kelas = tb_registrasi.id_kelas');
        $query = $builder->get();
        return $query->getResult();
    }

    
    
}
