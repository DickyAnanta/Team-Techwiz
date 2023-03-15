<?php

namespace App\Modules\Login\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'user';
    protected $primary_column = 'username';
    protected $allowedFields = ['username', 'password'];
}
