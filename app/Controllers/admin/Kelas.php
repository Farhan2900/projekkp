<?php

namespace App\Controllers\Admin;
use App\Models\KelasModel;

class Kelas extends BaseController
{
    function __construct()
    {
        $this->kelas = new KelasModel();
    }
    public function index()
    {
        $data['kelas'] = $this->kelas->findAll();
        return view('kelas/get',$data);
    }

    public function create()
    {
        return view('kelas/add');
        
    }

    public function save()
    {
        $data = $this->request->getPost();
        $this->kelas->insert($data);
        return redirect()->to(site_url('kelas'))->with('success', 'Data Kelas Berhasil Disimpan');

    }

    public function edit($id_kelas = null){
        $data['kelas'] = $this->kelas->where('id_kelas',$id_kelas)->first();
        return view('kelas/edit', $data);
    }

    public function update($id_kelas = null){
        $data = $this->request->getPost();
        $this->kelas->update($id_kelas,$data);
        return redirect()->to(site_url('kelas'))->with('success', 'Data Kelas Berhasil DiUbah');
    }
}