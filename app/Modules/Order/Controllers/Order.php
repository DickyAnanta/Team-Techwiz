<?php

namespace App\Modules\Order\Controllers;

use App\Modules\Menu\Models\MenuModel;
use App\Modules\Pelanggan\Models\PelangganModel;
use App\Modules\Order\Models\PesananModel;
use App\Modules\Order\Models\DetailPesananModel;
use App\Modules\Order\Models\StrukModel;
use App\Modules\Meja\Models\MejaModel;

class Order extends \App\Controllers\BaseController
{
    public function __construct()
    {
        $this->model = new MenuModel;
        $this->model1 = new PelangganModel;
        $this->model2 = new PesananModel;
        $this->model3 = new DetailPesananModel;
        $this->model4 = new StrukModel;
        $this->model5 = new MejaModel;
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
        $namabaru = "order-buktitf-" . date("YmdHis") . '.' . $ext; //definisikan nama fiel yang baru

        if ($file->move($direktori, $namabaru)) {
            $ret["response"] = true;
            $ret["fileupload"] = $namabaru;
        }

        return $ret;
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

    public function order_proses()
    {
        $ret = false;
        if (!empty($this->request->getPost())) {
            $dt_post = $this->request->getPost();
            $dt_post = json_decode($dt_post["order_data"], true);

            $id_pelanggan = "";
            $dt_pre_post_pelanggan = [
                "nama" => $dt_post["pembayaran"]["nama"],
                "telepon" => $dt_post["pembayaran"]["tlp"]
            ];
            $exist_pelanggan = $this->model1->exists($dt_pre_post_pelanggan["telepon"]);
            if ($exist_pelanggan == false) {
                $post_pelanggan = $this->model1->pelanggan(0, $dt_pre_post_pelanggan, "POST");
                if ($post_pelanggan["response"]) {
                    $id_pelanggan = $post_pelanggan["last_insert_id"];
                }
            } else {
                $id_pelanggan = $exist_pelanggan["id"];
            }

            $id_pesanan = "";
            $dt_pre_post_pesanan = [
                "meja_id" => 1,
                "pelanggan_id" => $id_pelanggan,
                "nomor" => 1,
                "status" => "WAITING",
                "created_by" => $id_pelanggan,
                "updated_by" => ""
            ];
            $post_pesanan = $this->model2->pesanan(0, $dt_pre_post_pesanan, "POST");
            if ($post_pesanan["response"]) {
                $id_pesanan = $post_pesanan["last_insert_id"];
            }

            $struk_total = 0;
            foreach ($dt_post["menu"] as $key => $value) {
                $dt_pre_post_menu = [
                    "menu_id" => decrypt_url($key),
                    "pesanan_id" => $id_pesanan,
                    "harga" => $value["harga"],
                    "jumlah" => $value["jumlah"],
                    "sub_total" => $value["total"],
                    "catatan" => @$value["catatan"]
                ];
                $post_pesanan = $this->model3->detailpesanan(0, $dt_pre_post_menu, "POST");
                $struk_total = $struk_total + $value["total"];
            }

            if (strtoupper($dt_post["pembayaran"]["metodepembayaran"]) == "TRANSFER") {
                $upload_bukti = $this->do_upload("bukti_transfer");
            }

            $dt_pre_post_struk = [
                "pesanan_id" => $id_pesanan,
                "tipe_pembayaran" => $dt_post["pembayaran"]["metodepembayaran"],
                "bukti_transfer" => @$upload_bukti["fileupload"],
                "total" => $struk_total
            ];
            $post_struk = $this->model4->struk(0, $dt_pre_post_struk, "POST");

            $ret = [
                "response" => true,
                "pesanan_id" => encrypt_url($id_pesanan)
            ];
        }

        echo json_encode($ret);
    }

    public function metodepembayaran()
    {
        return view("public/index");
    }

    public function pembayaran()
    {
        return view("public/index");
    }

    public function selesai($id = "")
    {
        $data = [];
        $dt_pesanan = $this->model2->detailed($id);
        $dt_pelanggan = $this->model1->detailed(encrypt_url($dt_pesanan["pelanggan_id"]));
        $dt_meja = $this->model5->detailed(encrypt_url($dt_pesanan["meja_id"]));
        $dt_struk = $this->model4->detailed($id);
        $datas_get_detailed_pesanan = [
            "select" => "title, detail_pesanan.harga",
            "getreturn" => "data",
            "order_by" => [
                "column" => "detail_pesanan.id",
                "order" => "ASC"
            ],
            "limit" => [
                "length" => -1,
                "start" => 0
            ],
            "whereclause" => "pesanan_id = " . decrypt_url($id)
        ];
        $detailed_pesanan = $this->model3->detailpesanan(0, $datas_get_detailed_pesanan, "GET");
        $data = [
            "pesanan" => $dt_pesanan,
            "pelanggan" => $dt_pelanggan,
            "meja" => $dt_meja,
            "struk" => $dt_struk,
            "detailed_pesanan" => $detailed_pesanan,
        ];

        return view("public/index", $data);
    }
}
