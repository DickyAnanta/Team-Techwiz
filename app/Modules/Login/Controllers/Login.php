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
        $data = $this->model1->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'username'     => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/user');
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
