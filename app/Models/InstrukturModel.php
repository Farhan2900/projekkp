<?php

namespace App\Models;

use CodeIgniter\Model;

class InstrukturModel extends Model
{ 
    protected $table            = 'tb_instruktur';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['nm_instruktur','alamat','nohp','tb_user_id'];

  
    function getUser(){
        $builder = $this->db->table('tb_instruktur');
        $builder->join('tb_user', 'tb_user.id = tb_instruktur.tb_user_id');
        $query = $builder->get();
        return $query->getResult();
    }

    
}