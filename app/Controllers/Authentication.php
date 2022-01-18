<?php

namespace App\Controllers;

class Authentication extends BaseController
{
  
    
    public function index()
    {
        return view('login');
    }


    public function loginproses(){
        
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