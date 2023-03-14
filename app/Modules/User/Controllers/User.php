<?php

namespace App\Modules\User\Controllers;

use App\Modules\User\Models\UserModel;

class User extends \App\Controllers\BaseController
{
    public function __construct()
    {
        $this->model = new UserModel;
    }

    public function index()
    {
        return view('admin/index');
    }

    public function edit($id = 0)
    {
        $dt_post = @$this->request->getPost();
        if (!empty($dt_post)) {
            $dt_user_pre_post = [
                "username" => $dt_post["username"],
                "email" => $dt_post["email"],
                "status" => "",
                "role" => "",
                "created_by" => "",
            ];
            // "password" => password_hash($dt_post["password"], PASSWORD_DEFAULT)

            $dt_profile_pre_post = [
                "nama" => $dt_post["nama"],
                "kelamin" => $dt_post["kelamin"],
                "tanggal_lahir" => $dt_post["ttl"],
                "telepon" => $dt_post["telepon"],
                "alamat" => $dt_post["alamat"],
                "created_by" => $dt_post["created_by"],
            ];

            if (!empty($id)) {
                $dt_user_pre_post["updated_by"] = 1;
                if (!empty($dt_post["password"])) {
                    $dt_user_pre_post["password"] = password_hash($dt_post["password"], PASSWORD_DEFAULT);
                }
            } else {
                $dt_user_pre_post["password"] = password_hash($dt_post["password"], PASSWORD_DEFAULT);
            }
        }
        return view('admin/index');
    }
}
