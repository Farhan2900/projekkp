<?php

namespace App\Controllers;
use App\Models\SiswaModel;
use App\Models\KelasModel;

class Siswa extends BaseController
{
    function __construct()
    {
        $this->siswa = new SiswaModel();
        $this->kelas = new KelasModel();
    }

    public function index()
    {
        
        $data = [
            'siswa' => $this->siswa->getAll(),
            // 'pager' => $this->siswa->pager,
        ];
        // $data['siswa'] = $this->siswa->getAll();
        // $data['page'] = $this->siswa->paginate(5);
        // $data['pager'] = $this->siswa->pager;
      
        return view('siswa/get',$data);
    }

    public function create()
    {

        $data['kelas'] = $this->kelas->findAll();
        return view('siswa/add',$data);
    }
    public function save()
    {
        $data = $this->request->getPost();
        $this->siswa->insert($data);
        return redirect()->to(site_url('siswa'))->with('success', 'Data Siswa Berhasil Di Registrasi');
    }

    public function detail($NIS){
        
        $data['siswa'] = $this->siswa->detail($NIS);
        return view('siswa/detail',$data);

    }
    public function edit($NIS = null){
        $data['kelas'] = $this->kelas->findAll();
        $data['siswa'] = $this->siswa->where('NIS',$NIS)->first();
        return view('siswa/edit',$data);
        }

    public function update($NIS = null){

        $data = $this->request->getPost();
        $this->siswa->update($NIS,$data);
        return redirect()->to(site_url('siswa'))->with('success', 'Data Siswa Berhasil DiUbah');
    }

    public function print(){
        $data['siswa'] = $this->siswa->getAll; 
        return view('siswa/print',$data);
    }

   
    
}