<?php

namespace App\Models;

use CodeIgniter\Model;

class InstrukturModel extends Model
{ 
    protected $table            = 'tb_instruktur';
    protected $primaryKey       = 'id_instruktur';
    protected $returnType       = 'object';
    protected $allowedFields = ['nm_instruktur','alamat','nohp','tb_user_id'];

  
    function getUser(){
        $builder = $this->db->table('tb_instruktur');
        $builder->join('tb_user', 'tb_user.id = tb_instruktur.tb_user_id');
        $query = $builder->get();
        return $query->getResult();
    }
    function putUser($id_instruktur = null){
       $sql = "SELECT
       `tb_user`.`id`,
       `tb_user`.`username`,
       `tb_user`.`email`,
       `tb_instruktur`.`id_instruktur`,
       `tb_instruktur`.`nm_instruktur`,
       `tb_instruktur`.`alamat`,
       `tb_instruktur`.`nohp`,
       `tb_instruktur`.`tb_user_id`
     FROM
       `tb_user`
       LEFT JOIN `tb_instruktur` ON `tb_user`.`id` = `tb_instruktur`.`tb_user_id` WHERE id_instruktur = $id_instruktur";
         $query = $this->db->query($sql);
         $data = $query->getResultArray();
         return $data;
    }

    
}