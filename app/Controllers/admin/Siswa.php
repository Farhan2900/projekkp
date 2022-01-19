<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\UserModel;
class Siswa extends BaseController
{
    function __construct()
    {
        $this->siswa = new SiswaModel();
        $this->user = new UserModel();
    }

    public function index()
    {
        
        $data = [
            'siswa' => $this->siswa->getUser(),
        ];
     
        return view('siswa/get',$data);
    }

    public function registrasi(){
        $data['user']= $this->user->findAll();
        $data['siswa']= $this->siswa->getUser();
        return view('registrasi',$data);
    }

    public function save(){
        
        $user = [
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT) ,
            'email' =>  $this->request->getVar('email'),
            'akses' => 'Siswa',
        ];
        // $data = $this->request->getVar();
        // $data['akses']='Instruktur';
        $this->user->insert($user);
        $iduser = $this->user->getInsertID();
        $data = [
            'NIK' => $this->request->getVar('NIK'),
            'nm_siswa' => $this->request->getVar('nm_siswa'),
            'tb_user_id'=> $iduser,
        ];
        $this->siswa->insert($data);
        $data['id'] = $iduser;
        $data['username'] = $user['username'];
        $data['email'] = $user['email'];
        $data['akses'] = $user['akses'];
        session()->set($data);
    }

   
    // public function create()
    // {

    //     $data['kelas'] = $this->kelas->findAll();
    //     return view('siswa/add',$data);
    // }
    // public function save()
    // {
    //     $data = $this->request->getPost();
    //     $this->siswa->insert($data);
    //     return redirect()->to(site_url('siswa'))->with('success', 'Data Siswa Berhasil Di Registrasi');
    // }

    // public function detail($NIS){
        
    //     $data['siswa'] = $this->siswa->detail($NIS);
    //     return view('siswa/detail',$data);

    // }
    // public function edit($NIS = null){
    //     $data['kelas'] = $this->kelas->findAll();
    //     $data['siswa'] = $this->siswa->where('NIS',$NIS)->first();
    //     return view('siswa/edit',$data);
    //     }

    // public function update($NIS = null){

    //     $data = $this->request->getPost();
    //     $this->siswa->update($NIS,$data);
    //     return redirect()->to(site_url('siswa'))->with('success', 'Data Siswa Berhasil DiUbah');
    // }

    // public function print(){
    //     $data['siswa'] = $this->siswa->getAll; 
    //     return view('siswa/print',$data);
    // }

   
    
}