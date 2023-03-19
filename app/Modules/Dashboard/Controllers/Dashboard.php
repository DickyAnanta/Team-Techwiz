<?php

namespace App\Modules\Dashboard\Controllers;

use App\Modules\Dashboard\Models\DashboardModel;

class Dashboard extends \App\Controllers\BaseController
{
    public function main()
    {
        return view("admin/index");
    }
}
