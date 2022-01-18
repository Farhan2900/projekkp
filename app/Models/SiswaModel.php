<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table            = 'tb_siswa';
    protected $primaryKey       = 'NIS';
    protected $returnType       = 'object';
    protected $allowedFields    = ['NIK','nm_siswa','jns_kelamin','tmpt_lhr','tgl_lahir','transportasi','nmr_telp',
                                'jns_tinggl','alamat','nm_dusun','wilaya','kabupaten_kota','kecamatan','kelurahan',
                                'nm_ayah','pekerjaan_ayah','nm_ibu','pekerjaan_ibu','upload_foto3x4','upload_ijazah',
                                'upload_ktp','tahun_masuk','id_kelas','agama','kelas_masuk'];
    
    function getAll(){
        $builder = $this->db->table('tb_registrasi');
        $builder->join('tb_kelas', 'tb_kelas.id_kelas = tb_registrasi.id_kelas');
        $query = $builder->get();
        return $query->getResult();
    }

  
    function detail($NIS){
        
        $sql ="SELECT
        `tb_kelas`.`id_kelas`,
        `tb_kelas`.`kelas_kursus`,
        `tb_registrasi`.*,
        `tb_registrasi`.`id_kelas` AS `id_kelas1`
      FROM
        `tb_kelas`
        LEFT JOIN `tb_registrasi` ON `tb_kelas`.`id_kelas` =
      `tb_registrasi`.`id_kelas` WHERE NIS = '$NIS'";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        return $data;

    }

    public function search($keyword){

      return $this->table('tb_register')->like('nm_siswa', $keyword);
    }

    


}