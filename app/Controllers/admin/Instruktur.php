<?php

namespace App\Controllers\Admin;
use App\Models\InstrukturModel;
use App\Models\UserModel;
use App\Controllers\BaseController;

class Instruktur extends BaseController
{
    function __construct()
    {
        $this->instruktur = new InstrukturModel();
        $this->user = new UserModel();
    }
    public function index()
    {
       $data ['instruktur'] = $this->instruktur->getUser();

        return view('Instruktur/get',$data);
    }

    public function create()
    {
        
        $data['user'] = $this->user->findAll();
        $data['instruktur'] = $this->instruktur->getUser();
        return view('Instruktur/add',$data);
    }
    public function save()
    {  
       
            $user = [
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
                'email' => $this->request->getVar('email'),
                'akses' => 'Instruktur',
            ];
            // $data = $this->request->getVar();
            // $data['akses']='Instruktur';
            $this->user->insert($user);
            $iduser = $this->user->getInsertID();
            $data = [
                'nm_instruktur' => $this->request->getVar('nm_instruktur'),
                'alamat' => $this->request->getVar('alamat'),
                'nohp' => $this->request->getVar('nohp'),
                'tb_user_id'=> $iduser,
            ];
            $this->instruktur->insert($data);
            return redirect()->to(site_url('instruktur'))->with('success', 'Data Instruktur Berhasil Di Registrasi');
     
        
    }
}