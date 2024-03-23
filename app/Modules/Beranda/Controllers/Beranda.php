<?php

namespace App\Modules\Beranda\Controllers;

use App\Modules\Beranda\Models\BerandaModel;

class Beranda extends \App\Controllers\BaseController
{
    public function __construct()
    {
        $this->model = new BerandaModel;
    }
    public function main()
    {
        $datas = [
            "select" => "id, title, deskripsi, gambar, tipe, harga, stok",
            "getreturn" => "data",
            "order_by" => [
                "column" => "",
                "order" => "DESC"
            ],
            "limit" => [
                "lenght" => -1,
                "start" => ""
            ],
            "whereclause" => "tipe ='makanan'"
        ];
        $ret = $this->model->menu(0, $datas, "get");
        return view("public/index", $ret);
    }
}
