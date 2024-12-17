<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vtdVattu extends Model
{
    use HasFactory;
    protected $table = "vtdvattu";
    protected $primaryKey = 'vtdMaVTu'; // Đặt khóa chính
    public $incrementing = false; // Nếu vtdMaVTu không phải là auto-increment
    
    public $timestamps = false;
}
