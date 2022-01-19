<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table            = 'tb_siswa';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields    = ['NIK','nm_siswa','jns_kelamin','tmpt_lhr','tgl_lahir','transportasi','nmr_telp',
                                'jns_tinggl','alamat','nm_dusun','wilaya','kabupaten_kota','kecamatan','kelurahan',
                                'nm_ayah','pekerjaan_ayah','nm_ibu','pekerjaan_ibu','upload_foto3x4','upload_ijazah',
                                'upload_ktp','tahun_masuk','id_kelas','agama','tb_user_id'];
  
  
    public function getUser(){
        $builder = $this->db->table('tb_siswa');
        $builder->join('tb_user', 'tb_user.id = tb_siswa.tb_user_id');
        $query = $builder->get();
        return $query->getResult();

    }
    


}