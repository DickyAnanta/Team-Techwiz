<?php

namespace App\Modules\User\Controllers;

use App\Modules\User\Models\UserModel;
use App\Modules\User\Models\ProfileModel;

class User extends \App\Controllers\BaseController
{
    public function __construct()
    {
        $this->model = new UserModel;
        $this->model1 = new ProfileModel;
    }

    public function index()
    {
        $datas = [
            "select" => "user.id, username, nama, password, email, kelamin, tanggal_lahir, telepon, alamat, status, role",
            "getreturn" => "data",
            "order_by" => [
                "column" => "",
                "order" => "DESC"
            ],
            "limit" => [
                "lenght" => -1,
                "start" => ""
            ],
            "whereclause" => ""
        ];
        $ret = $this->model->user(0, $datas, "get");
        return view('admin/index', $ret);
    }

    public function edit($id = '')
    {
        // dd($id);
        $ret = [];
        $dt_post = @$this->request->getPost();
        if (!empty($dt_post)) {
            // dd($dt_post);
            $exists = $this->model->exists($dt_post['username']);
            if (empty($id)) {
                if ($exists) {
                    $ret['alert'] = [
                        'title' => 'Error Exists',
                        'type' => 'error',
                        'message' => 'Data sudah ada',
                        'cobtn' => true,
                        'redirect' => false,
                        'redirect_to' => ''
                    ];
                } else {
                    $dt_user_pre_post = [
                        "username" => $dt_post['username'],
                        "password" => $dt_post['password'],
                        "email" => $dt_post['email'],
                    ];
                    if (!empty($id)) {
                        $dt_user_pre_post["updated_by"] = 1;
                        if (!empty($dt_post["password"])) {
                            $dt_user_pre_post["password"] = password_hash($dt_post["password"], PASSWORD_DEFAULT);
                        }
                    } else {
                        $dt_user_pre_post["password"] = password_hash($dt_post["password"], PASSWORD_DEFAULT);
                    }

                    $data = [
                        "username" => $dt_post["username"],
                        "email" => $dt_post["email"],
                        "password" => $dt_user_pre_post["password"],
                        "status" => "",
                        "role" => "",
                        "created_by" => "",
                    ];
                    $sv_data = @$this->model->user(0, $data, "post");
                    if ($sv_data['response']) {
                        $dt_profile_pre_post = [
                            "nama" => $dt_post['nama'],
                            "kelamin" => $dt_post['kelamin'],
                            "ttl" => $dt_post['ttl'],
                            "telepon" => $dt_post['telepon'],
                        ];
                        $data = [
                            'user_id' => $sv_data['last_insert_id'],
                            'nama' => $dt_post['nama'],
                            'kelamin' => $dt_post['kelamin'],
                            'tanggal_lahir' => $dt_post['ttl'],
                            'telepon' => $dt_post['telepon'],
                            'alamat' => $dt_post['alamat']
                        ];
                        $sql2 = $this->model1->profile(0, $data, "post");
                        $ret['alert'] = [
                            'title' => 'Success',
                            'type' => 'success',
                            'message' => 'Data berhasil ditambahkan',
                            'cobtn' => false,
                            'redirect' => true,
                            'redirect_to' => '/'
                        ];
                    } else {
                        $ret['alert'] = [
                            'title' => 'Failed',
                            'type' => 'error',
                            'message' => 'Data gagal ditambahkan',
                            'cobtn' => true,
                            'redirect' => false,
                            'redirect_to' => ''
                        ];
                    }
                }
            } else {
                if (decrypt_url($id) == @$exists['id'] || ($exists == false)) {
                    $data = [
                        "username" => $dt_post["username"],
                        "email" => $dt_post["email"],
                        "status" => "",
                        "role" => "",
                        "created_by" => "",
                    ];
                    $sv_data2 = @$this->model->user($id, $data, "patch");
                    // dd($sv_data2);
                    if ($sv_data2['response']) {
                        $data = [
                            'nama' => $dt_post['nama'],
                            'kelamin' => $dt_post['kelamin'],
                            'tanggal_lahir' => $dt_post['tanggal_lahir'],
                            'telepon' => $dt_post['telepon'],
                            'alamat' => $dt_post['alamat']
                        ];
                        $sql2 = $this->model1->profile($id, $data, "patch");
                        $ret['alert'] = [
                            'title' => 'Succsess',
                            'type' => 'success',
                            'message' => 'Data berhasil edit',
                            'cobtn' => false,
                            'redirect' => false,
                            'redirect_to' => ''
                        ];
                    } else {
                        $ret['alert'] = [
                            'title' => 'Failed',
                            'type' => 'error',
                            'message' => 'Data gagal diedit',
                            'cobtn' => true,
                            'redirect' => false,
                            'redirect_to' => ''
                        ];
                    }
                } else {
                    $ret['alert'] = [
                        'title' => 'Error Exists',
                        'type' => 'error',
                        'message' => 'Data sudah ada',
                        'cobtn' => true,
                        'redirect' => false,
                        'redirect_to' => ''
                    ];
                }
            }
        }

        if (!empty($id)) {
            $data = $this->model->detailed($id);
        }

        if (empty($data)) {
            if (@$ret['alert']['type'] != 'success') {
                $ret['data'] = @$dt_post;
            }
        } else {
            $ret['data'] = @$data;
        }

        return view('admin/index', $ret);
    }
}
