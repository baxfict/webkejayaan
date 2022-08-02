<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {

        $ModelAdmin = new \App\Models\M_akun_admin();
        $login = $this->request->getPost('login');
        if ($login) {
            $user = $this->request->getPost('user');
            $password = $this->request->getPost('password');

            if ($user == '' or $password == '') {
                $err = " Masukan Username dan Password";
            }
            if (empty($err)) {
                $dataAdmin = $ModelAdmin->where("user", $user)->first();
                if ($dataAdmin == '') {
                    $err = "Username salah";
                }
                else {
                    if ($dataAdmin['password'] != md5($password)) {
                    $err = "Password salah"; }
                } 
            }
            if (empty($err)) {
                $dataSesi = [
                    'id' => $dataAdmin['id'],
                    'user' => $dataAdmin['user'],
                    'password' => $dataAdmin['password'],
                ];
                session()->set($dataSesi);
                return redirect()->to(base_url('admin'));
            }
            if ($err) {
                session()->setFlashdata('user', $user);
                session()->setFlashdata('error', $err);
                return redirect()->to(base_url('login'));
            }
        }
        
   
      
        echo view('login');
       
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}
