<?php

namespace App\Controllers\Admin;
use App\Models\ProgramKursusModel;
use App\Controllers\BaseController;

class ProgramKursus extends BaseController
{
    function __construct()
    {
        $this->programkursus = new ProgramKursusModel();
    }
    public function index()
    {
        $data['programkursus'] = $this->programkursus->findAll();
        return view('Programkursus/get',$data);
    }

    public function create()
    {
        $data['programkursus'] = $this->programkursus->findAll();
        return view('Programkursus/add',$data);
        
    }

    public function save()
    {
        $data = [
            'program_kursus' => $this->request->getPost(),
        ];
        // $data = $this->request->getPost();
        $this->programkursus->insert($data);
        return redirect()->to(site_url('programkursus'))->with('success', 'Data Program Kursus Berhasil Di Tambah');
       

    }

    // public function edit($id_kelas = null){
    //     $data['kelas'] = $this->kelas->where('id_kelas',$id_kelas)->first();
    //     return view('kelas/edit', $data);
    // }

    // public function update($id_kelas = null){
    //     $data = $this->request->getPost();
    //     $this->kelas->update($id_kelas,$data);
    //     return redirect()->to(site_url('kelas'))->with('success', 'Data Kelas Berhasil DiUbah');
    // }
}