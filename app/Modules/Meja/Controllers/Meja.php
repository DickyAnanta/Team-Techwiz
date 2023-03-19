<?php

namespace App\Modules\Meja\Controllers;

use App\Modules\Meja\Models\MejaModel;

// include("/assets/plugins/phpqrcode/qrlib.php");
use QRcode;


class Meja extends \App\Controllers\BaseController
{
    public function __construct()
    {
        $this->model = new MejaModel();
        // $this->model1 = new qrlib();
    }

    var $table1 = "meja";
    var $column_order = array(null, 'nomor', 'status');
    var $default_order = [
        "column" => "nomor",
        "order" => "ASC"
    ];
    var $column_select = 'id, nomor, status';

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
        $items = $this->model->meja(0, $datas, "GET");

        $data = array();
        $no = @$getdata['start'];
        foreach ($items["data"] as $key => $value) {
            $no++;
            $row = array();
            $module = 'meja';
            $item = $value["nomor"];  //primary key items
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
            // 'title', 'deskripsi', 'tipe', 'harga', 'stok
            $row[] = '';
            $row[] = $edit;
            $row[] = $value["status"];
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
                "select" => "id",
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
            $query = $this->model->meja(0, $datas, "GET");
        } else {
            $whereclause = @$getdata["search"];
            $datas = [
                "select" => "id",
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
            $query = $this->model->meja(0, $datas, "GET");
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

    private function qr_code($id = '')
    {
        include(ROOTPATH . "public/assets/plugins/phpqrcode/qrlib.php");
        $penyimpanan = str_replace("\\", "/", ROOTPATH);

        if (!file_exists($penyimpanan)) {
            mkdir($penyimpanan);
        }

        $isi = 'Siredig';

        // perintah untuk membuat qrcode dan menyimpannya dalam folder temp
        // atur level pemulihan datanya dengan QR_ECLEVEL_L | QR_ECLEVEL_M | QR_ECLEVEL_Q | QR_ECLEVEL_H
        // atur pixel qrcode pada parameter ke 4
        // atur jarak frame pada parameter ke 5
        QRcode::png($isi, $penyimpanan . '', QR_ECLEVEL_L, 1, 5);


        // menampilkan qrcode
        // img src memanggil qr code
        // $penyimpanan = folder penyimpanan
        // nama file qr code
        echo '<img src="' . $penyimpanan . '';
        // $namabaru = 'meja-' . $id . '.' . 'png';
        // dd(QRcode::png("abc", $penyimpanan . $namabaru, QR_ECLEVEL_L, 10, 5));

        // return $namabaru;
    }

    public function edit($id = '')
    {
        $ret = [];
        $dt_post = @$this->request->getPost();

        if (!empty($dt_post)) {
            $exists = $this->model->exists(strtoupper($dt_post['nomor']));
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
                    $dt_menu_pre_post = [
                        "nomor" => strtoupper($dt_post['nomor']),
                        "status" => "Available",
                        "created_by" => ""
                    ];
                    $sv_data = @$this->model->meja(0, $dt_menu_pre_post, "post");
                    if ($sv_data['response']) {
                        $ret['alert'] = [
                            'title' => 'Success',
                            'type' => 'success',
                            'message' => 'Data berhasil ditambahkan',
                            'cobtn' => false,
                            'redirect' => true,
                            'redirect_to' => 'meja'
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
                        "nomor" => strtoupper($dt_post['nomor']),
                        "updated_by" => "",
                    ];
                    $sv_data2 = @$this->model->meja($id, $data, "patch");
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
