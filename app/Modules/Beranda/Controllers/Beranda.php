<?php

namespace App\Modules\Beranda\Controllers;

use App\Modules\Beranda\Models\BerandaModel;

class Beranda extends \App\Controllers\BaseController
{
    public function beranda()
    {
        return view("public/index");
    }
}
