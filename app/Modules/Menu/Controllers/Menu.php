<?php

namespace App\Modules\Menu\Controllers;

use App\Modules\Menu\Models\MenuModel;

class Menu extends \App\Controllers\BaseController
{
    public function __construct()
    {
        $this->model = new MenuModel;
    }

    protected function do_upload($field)
    {
        $ret = [
            "response" => false,
            "fileupload" => ""
        ];
        //$request = \Config\Services::request();
        $file = $this->request->getFile($field);
        $ext = $file->getClientExtension(); // Mengetahui extensi File

        $direktori = ROOTPATH . 'public/assets/upload/images'; //definisikan direktori upload
        $namabaru = "menu-" . date("YmdHis") . '.' . $ext; //definisikan nama fiel yang baru

        if ($file->move($direktori, $namabaru)) {
            $ret["response"] = true;
            $ret["fileupload"] = $namabaru;
        }

        return $ret;
    }

    public function index()
    {
        $datas = [
            "select" => "title, deskripsi, gambar, tipe, harga, stok",
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
        $ret = $this->model->menu(0, $datas, "get");
        return view('admin/index', $ret);
    }

    public function edit($id = '')
    {
        $ret = [];
        $dt_post = @$this->request->getPost();

        if (!empty($dt_post)) {
            $exists = $this->model->exists($dt_post['title']);
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
                    $upload_gamber = $this->do_upload("gambar");
                    $dt_menu_pre_post = [
                        "title" => $dt_post['title'],
                        "deskripsi" => $dt_post['deskripsi'],
                        "gambar" => ($upload_gamber["response"] === true) ? $upload_gamber["fileupload"] : "",
                        "tipe" => $dt_post['tipe'],
                        "harga" => $dt_post['harga'],
                        "stok" => $dt_post['stok'],
                        "created_by" => ""
                    ];
                    $sv_data = @$this->model->menu(0, $dt_menu_pre_post, "post");
                    if ($sv_data['response']) {
                        $ret['alert'] = [
                            'title' => 'Success',
                            'type' => 'success',
                            'message' => 'Data berhasil ditambahkan',
                            'cobtn' => false,
                            'redirect' => true,
                            'redirect_to' => '/menu'
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
                    $get_detailed = $data = $this->model->detailed($id);
                    if (!empty($_FILES['gambar']['name'])) {
                        helper('filesystem');
                        $direktori = ROOTPATH . 'public/assets/upload/images/';
                        $map = directory_map($direktori, FALSE, TRUE);

                        /* Cek File apakah ada */
                        foreach ($map as $key) {
                            if ($key == $get_detailed["gambar"]) {
                                delete_files($direktori, $get_detailed["gambar"]);
                            }
                        }

                        $upload_gamber = $this->do_upload("gambar");
                    }

                    $data = [
                        "title" => $dt_post["title"],
                        "deskripsi" => $dt_post["deskripsi"],
                        "gambar" => (@$upload_gamber["response"] === true) ? $upload_gamber["fileupload"] : $get_detailed["gambar"],
                        "tipe" => $dt_post['tipe'],
                        "harga" => $dt_post['harga'],
                        "stok" => $dt_post['stok'],
                        "updated_by" => "",
                    ];
                    $sv_data2 = @$this->model->menu($id, $data, "patch");
                    if ($sv_data2['response']) {
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

    public function menu()
    {
        return view("public/index");
    }
}
