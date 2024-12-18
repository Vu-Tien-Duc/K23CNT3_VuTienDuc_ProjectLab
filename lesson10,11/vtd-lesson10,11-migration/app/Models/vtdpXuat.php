<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vtdpXuat extends Model
{
    use HasFactory;
    protected $table = "vtdpxuat";
    protected $primaryKey = 'vtdSoPx'; // Đặt khóa chính
    public $incrementing = false; // Nếu vtdnhacc không phải là auto-increment
    public $timestamps = false;
    
}
