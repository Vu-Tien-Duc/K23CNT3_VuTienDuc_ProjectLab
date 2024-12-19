<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vtd_QUAN_TRI extends Model
{
    use HasFactory;
   // Chỉ định bảng của model nếu tên bảng khác tên mặc định
   protected $table = 'vtd_QUAN_TRI';

   // Nếu bảng không có cột `created_at` và `updated_at`, bạn có thể tắt việc sử dụng chúng
   public $timestamps = false;

   // Khai báo các trường có thể gán giá trị (mass assignment)
   protected $fillable = [
       'vtdTaiKhoan',
       'vtdMatKhau',
       'vtdTrangThai',
   ];
}
