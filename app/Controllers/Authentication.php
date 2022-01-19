<?php

namespace App\Controllers;

class Authentication extends BaseController
{
    public function __construct() {
        $this->user = new \App\Models\UserModel();
    }
    public function index()
    {
        return view('login');
    }

    public function saveRegister(){


    }

    public function loginproses(){
        $data = $this->request->getPost();
        $user = $this->user->asObject()->where('username', $data['username'])->get()->getRowObject();
        if($user){
            if(password_verify($data['password'], $hash)){
                if($user['akses']=='Admin'){
                    $item = [
                        'nama'=> 'Administrator',
                        'username'=> $user->username,
                        'email'=> $user->email,
                        'akses'=> $user->akses,
                    ];
                    session()->set($item);
                    return redirect()->to(base_url('admin'));
                }else if($user['akses']=='Instruktur'){
                    $ins = new \App\Models\InstrukturModel();
                    $instruktur = $ins->where('tb_user_id', $user->id)->get()->getRowObject();
                    $item = [
                        'nama'=> $instruktur->nm_instruktur,
                        'username'=> $user->username,
                        'email'=> $user->email,
                        'akses'=> $user->akses,
                    ];
                    session()->set($item);
                }else{
                    $sis = new \App\Models\SiswaModel();
                    $siswa = $sis->where('tb_user_id', $user->id)->get()->getRowObject();
                    $item = [
                        'nama'=> $siswa->nm_siswa,
                        'username'=> $user->username,
                        'email'=> $user->email,
                        'akses'=> $user->akses,
                    ];
                    session()->set($item);
                }
            }else{
                
            }
        }
        
    }

    // public function loginProses(){
    //     $post = $this->request->getPost();
    //     $data['auth'] = $this->auth->getWhere(['username'=>$post['username']]);
    //     $user = $data['auth']->getRow();
    //     if ($user) {
    //        if (password_verify($post['password'],$user->password)) {
    //            $params = ['Id'=>$user->Id];
    //             session()->set($params);
    //             return redirect()->to(site_url('home'))->with('success', 'Data Kelas Berhasil DiUbah');

    //        }else{
    //         return redirect()->back()->with('error', 'Password Salah');
    //        }
    //     }else{
    //         return redirect()->back()->with('error', 'Username tidak di temukan');
    //     }

    // } 
    

    // public function login_action(){
    //     $auth = new AuthModel();
        
    //     $username = $this->request->getPost('username');
    //     $password = $this->request->getPost('password');

    //     $cek = $auth->get_data($username,$password);

    //     if (($cek['username'] == $username) && ($cek['password'] == $password)) {
    //         session()->set('username', $cek['username']);
    //         session()->set('password', $cek['password']);
    //         session()->set('Id', $cek['Id']);

    //         return redirect()->to(site_url('home'))->with('success', 'Data Kelas Berhasil Disimpan');
    //     }else{
    //         return redirect()->back()->with('error', 'Username dan Password tidak ditemukan');
    //     }
    // }
    // public function loginProses(){
    //     $post = $this->request->getPost();
    //     $data['auth'] = $this->auth->getWhere(['username'=>$post['username']]);
    //     $data['auth'] = $this->auth->getWhere(['password'=>$post['password']]);
    //     $user = $data['auth']->getRow();
    //     if ($user){
    //         session()->set('username', $user['username']);
    //         session()->set('password', $user['password']);
            
    //         return redirect()->to(site_url('home'))->with('success', 'Data Kelas Berhasil Disimpan');

    //     }else{
    //         return redirect()->back()->with('error', 'Username dan Password tidak ditemukan');
    //     }
    // }


    }