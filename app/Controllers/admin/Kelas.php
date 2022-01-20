<?php

namespace App\Controllers\Admin;
use App\Models\KelasModel;
use App\Models\ProgramKursusModel;
use App\Models\InstrukturModel;
use App\Controllers\BaseController;

class Kelas extends BaseController
{
    function __construct()
    {
        $this->kelaskursus = new KelasModel();
        $this->instruktur = new InstrukturModel();
        $this->programkursus = new ProgramKursusModel();
        helper('form');
    }
    public function index()
    {
       $data ['kelaskursus'] = $this->kelaskursus->getAll();

        return view('Kelas/get',$data);
    }

    public function create()
    {
        $data = [
            'kelaskursus' => $this->kelaskursus->getAll(),
            'instruktur' => $this->instruktur->findAll(),
            'programkursus' => $this->programkursus->findAll(),
        ];
        return view('Kelas/add',$data);
    }
    
    public function save()
    {  
       
           $data = $this->request->getPost();
           $this->kelaskursus->insert($data);
     
           return redirect()->to(site_url('kelas'))->with('success', 'Kelas Kursus Berhasil Di Tambahkan');
    }
}