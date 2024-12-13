<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vtdSinhvien extends Model
{
    use HasFactory;
    protected $table = 'vtdsinhvien';
    protected $primaryKey = 'VTDMASINHVIEN'; // Chỉ định cột khóa chính đúng
    public $timestamps = false;
}
