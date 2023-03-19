<?php

namespace App\Modules\Menu\Controllers;

use App\Modules\Menu\Models\MenuModel;

class Menu extends \App\Controllers\BaseController
{
  public function __construct()
  {
    $this->model = new MenuModel;
  }

  var $table1 = "user";
  var $column_order = array(null, null, 'title', 'deskripsi', 'tipe', 'harga', 'stok');
  var $default_order = [
    "column" => "title",
    "order" => "ASC"
  ];
  var $column_select = 'menu.id, title, deskripsi, gambar, tipe, harga, stok';
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
    $items = $this->model->menu(0, $datas, "GET");

    $data = array();
    $no = @$getdata['start'];
    foreach ($items["data"] as $key => $value) {
      $no++;
      $row = array();
      $module = 'menu';
      $item = $value["title"];  //primary key items
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
      $row[] = '<div class="images"><img src="/assets/upload/images/' . $value["gambar"] . '" alt="" width="300" height="200"></div>';
      $row[] = $edit;
      $row[] = $value["deskripsi"];
      $row[] = $value["tipe"];
      $row[] = idr($value["harga"]);
      $row[] = $value["stok"];
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
        "select" => "menu.id",
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
      $query = $this->model->menu(0, $datas, "GET");
    } else {
      $whereclause = @$getdata["search"];
      $datas = [
        "select" => "menu.id",
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
      $query = $this->model->menu(0, $datas, "GET");
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
