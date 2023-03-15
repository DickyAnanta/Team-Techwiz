<?php

namespace App\Modules\Login\Controllers;

use App\Modules\Login\Models\LoginModel;

class Login extends \App\Controllers\BaseController
{
    public function __construct()
    {
        $this->model1 = new LoginModel;
    }
    public function login_v1()
    {
        return view("\App\Modules\Login\Views\login_v1.php");
    }

    public function auth($username = "", $password = "")
    {
        $session = session();
        $username = $this->model1->request->getVar('username');
        $password = $this->model1->request->getVar('password');
        $username = "dickyananta";
        $password = "12345";
        $data = $this->model1->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'username'     => $data['username'],
                    'logged_in'     => TRUE
                ];
                // dd($ses_data);
                $session->set($ses_data);
                // dd($_SESSION);
                return redirect()->to('/');
            } else {
                $session->setFlashdata('msg', 'Password salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username tidak ada');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('');
    }
}
