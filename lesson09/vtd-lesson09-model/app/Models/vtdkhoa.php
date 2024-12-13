<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vtdkhoa extends Model
{
    use HasFactory;


    protected $table = 'vtdkhoa'; // Nếu tên bảng khác với tên model

    public $timestamps = false; // Nếu không sử dụng các cột `created_at` và `updated_at`
}
