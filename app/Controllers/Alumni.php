<?php

namespace App\Controllers;
use App\Models\AlumniModel;
use App\Models\SiswaModel;

class Alumni extends BaseController
{
    function __construct()
    {
        $this->alumni = new AlumniModel();
        $this->siswa = new SiswaModel();
    }
    public function index()
    {
        $data['alumni'] = $this->alumni->getSiswa();
        return view('alumni/get',$data);
    }

    public function create()
    {
        
        $data =array(
            'alumni' => $this->alumni->getSiswa(),
            'siswa' => $this->siswa->getAll() 
        );
        return view('alumni/add',$data);
        
    }

    public function save(){
        
        $data = $this->request->getPost();
        $this->alumni->insert($data);


        return redirect()->to(site_url('siswa'))->with('success', 'Data Alumni Berhasil Di Tambahkan');
    }
}
