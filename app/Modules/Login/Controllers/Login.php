<?php

namespace App\Modules\Login\Controllers;

use App\Modules\Login\Models\LoginModel;
use App\Modules\User\Models\UserModel;

class Login extends \App\Controllers\BaseController
{
    public function __construct()
    {
        $this->model = new LoginModel;
        $this->model1 = new UserModel;
    }

    public function login_v1()
    {
        if (session()->get("logged_in")) {
            return redirect()->to(base_url() . '/dashboard');
        }
        return view("\App\Modules\Login\Views\login_v1.php");
    }

    public function auth($username = "", $password = "")
    {
        $session = session();
        $username = $this->model->request->getVar('username');
        $password = $this->model->request->getVar('password');

        $whereclause = "username = '" . $username . "'";
        $userdata = $this->model1->detailed(0, $whereclause);

        if ($userdata) {
            $verify_pass = password_verify($password, $userdata["password"]);
            if ($verify_pass) {
                $ses_data = [
                    'logged_in' => true,
                    'id' => $userdata['id'],
                    'username' => $userdata["username"],
                    'nama' => $userdata["nama"]
                ];
                $session->set($ses_data);
                return redirect()->to(base_url() . '/dashboard');
            } else {
                $session->setFlashdata('msg', 'Password salah');
                return redirect()->to(base_url() . '/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username tidak ada');
            return redirect()->to(base_url() . '/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url() . '/');
    }
}
