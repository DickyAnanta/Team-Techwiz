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

    var $table1 = "user";
    var $column_order = array(null, 'username', 'nama', 'email', 'kelamin', 'tanggal_lahir', 'telepon', 'alamat');
    var $default_order = [
        "column" => "nama",
        "order" => "ASC"
    ];
    var $column_select = 'user.id, username, nama, email, kelamin, tanggal_lahir, telepon, alamat';

    public function main()
    {
        return view('admin/index');
    }

    public function table_main()
    {
        $getdata = @$this->request->getGet();
        $datas = [
            "select" => $this->column_select,
            "getreturn" => "data",
            "order_by" => [
                "column" => (!empty($getdata['order']['0']['column'])) ?  $this->column_order[$getdata['order']['0']['column']] : $this->default_order["column"],
                "order" => (!empty($getdata['order']['0']['column'])) ?  $getdata['order']['0']['dir'] : $this->default_order["order"]
            ],
            "limit" => [
                "length" => @$getdata["length"],
                "start" => @$getdata["start"]
            ],
            "whereclause" => @$getdata["whereclause"]
        ];
        $items = $this->model->user(0, $datas, "GET");

        $data = array();
        $no = @$getdata['start'];
        foreach ($items["data"] as $key => $value) {
            $no++;
            $row = array();
            $module = 'user';
            $item = $value["username"];  //primary key items
            $action = '';

            // Start variable of attributs edit button
            $restore = '';
            $disabled_restore = "disabled";
            $delete_restore = '';
            // End variable of attributs edit button

            // Start variable of attributs edit button
            $delete = '';
            $disabled_delete = "disabled";
            $delete_link = '';
            // End variable of attributs edit button

            // Start variable of attributs edit button
            $edit = '';
            $disabled_edit = 'disabled';
            $edit_link = '';
            // End variable of attributs edit button

            $edit = '<a title="Detail/Edit rows" href="' . BASE_URL($module . '/' . 'edit/' . encrypt_url($value["id"])) . '"class="btn btn-link">' . $item . '</a>';
            // $delete = "<button title='Delete item - " . $item . "' data-id='" . $delete_link . "' data-item='" . $item . "' class='btn btn-link btn-delete " . $disabled_delete . "'><i class='fa-solid fa-trash'></i></button>";
            // $delete = "<button title='Delete item - " . $item . " permanently' data-id='" . encrypt_url($value["id"]) . "' data-item='" . $item . "' class='btn btn-link btn-delete " . $disabled_delete . "'><i class='fa-solid fa-trash'></i></button>";
            // Start marging edit
            $action .= $delete;
            $action .= $restore;
            // End marging edit

            $row[] = '';
            $row[] = $edit;
            $row[] = $value["nama"];
            $row[] = $value["email"];
            $row[] = $value["kelamin"];
            $row[] = $value["tanggal_lahir"];
            $row[] = $value["telepon"];
            $row[] = $value["alamat"];
            $row[] = $action;
            $data[] = $row;
        }

        $output = array(
            "firstItem" => encrypt_url(@$items["data"][0]["id"]),
            "draw" => @$getdata['draw'],
            "recordsTotal" => @$items["all_record"],
            "recordsFiltered" => @$items["filtered_record"],
            "data" => $data,
        );

        echo json_encode($output);
    }

    public function check_query()
    {
        $ret = [];
        $getdata = @$this->request->getGet();
        if (is_array(@$getdata["search"])) {
            $whereclause = buildWhereClause(@$getdata["search"]);

            $datas = [
                "select" => "user.id",
                "getreturn" => "query",
                "order_by" => [
                    "column" => "",
                    "order" => ""
                ],
                "limit" => [
                    "length" => 1,
                    "start" => 0
                ],
                "whereclause" => $whereclause
            ];
            $query = $this->model->user(0, $datas, "GET");
        } else {
            $whereclause = @$getdata["search"];
            $datas = [
                "select" => "user.id",
                "getreturn" => "query",
                "order_by" => [
                    "column" => "",
                    "order" => ""
                ],
                "limit" => [
                    "length" => 1,
                    "start" => 0
                ],
                "whereclause" => @$whereclause
            ];
            $query = $this->model->user(0, $datas, "GET");
        }

        $check_query = check_query($query);
        if ($check_query) {
            $ret = [
                "response" => true,
                "whereclause" => $whereclause
            ];
        } else {
            $ret = $check_query;
        }

        echo json_encode($ret);
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

                    $data = [
                        "username" => $dt_post["username"],
                        "email" => $dt_post["email"],
                        "password" => password_hash($dt_post["password"], PASSWORD_DEFAULT),
                        "status" => "",
                        "role" => "",
                        "created_by" => "",
                    ];
                    $sv_data = @$this->model->user(0, $data, "post");
                    if ($sv_data['response']) {
                        $data = [
                            'user_id' => $sv_data['last_insert_id'],
                            'nama' => $dt_post['nama'],
                            'kelamin' => $dt_post['kelamin'],
                            'tanggal_lahir' => $dt_post['ttl'],
                            'telepon' => $dt_post['telepon'],
                            'alamat' => $dt_post['alamat'],
                            "created_by" => ""
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
                        "updated_by" => "",
                    ];

                    if (!empty($dt_post["password"])) {
                        $dt_user_pre_post["password"] = password_hash($dt_post["password"], PASSWORD_DEFAULT);
                    }
                    $sv_data2 = @$this->model->user($id, $data, "patch");
                    if ($sv_data2['response']) {
                        $data = [
                            'nama' => $dt_post['nama'],
                            'kelamin' => $dt_post['kelamin'],
                            'tanggal_lahir' => $dt_post['ttl'],
                            'telepon' => $dt_post['telepon'],
                            'alamat' => $dt_post['alamat'],
                            'updated_by' => "",
                        ];
                        $this->model1->profile($id, $data, "patch");
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
