<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vtdNhaCC extends Model
{
    use HasFactory;
    protected $table = "vtdnhacc";
    protected $primaryKey = 'vtdMaNCC'; // Đặt khóa chính
    public $incrementing = false; // Nếu vtdnhacc không phải là auto-increment
    public $timestamps = false;
    
}
