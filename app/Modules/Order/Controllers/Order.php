<?php

namespace App\Modules\Order\Controllers;

use App\Modules\Order\Models\OrderModel;

class Order extends \App\Controllers\BaseController
{
    public function order()
    {
        return view("public/index");
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
