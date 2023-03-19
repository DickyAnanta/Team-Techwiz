<?php

namespace App\Modules\Order\Controllers;

use App\Modules\Order\Models\OrderModel;
use App\Modules\Menu\Models\MenuModel;

class Order extends \App\Controllers\BaseController
{
    public function __construct()
    {
        $this->model = new MenuModel;
    }

    public function order()
    {
        $data = [];
        $datas = [
            "select" => "id, title, harga, stok, tipe, gambar",
            "getreturn" => "data",
            "order_by" => [
                "column" => "title",
                "order" => "ASC"
            ],
            "limit" => [
                "length" => -1,
                "start" => 0
            ],
            "whereclause" => ""
        ];
        $menus = $this->model->menu(0, $datas, "GET", $data);
        $data = [
            "menu" => $menus,
        ];

        return view("public/index", $data);
    }

    public function metodepembayaran()
    {
        return view("public/index");
    }

    public function pembayaran()
    {
        return view("public/index");
    }

    public function selesai()
    {
        return view("public/index");
    }
}
