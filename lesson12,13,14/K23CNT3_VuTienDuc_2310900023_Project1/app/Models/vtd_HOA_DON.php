<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vtd_HOA_DON extends Model
{
    use HasFactory;

    protected $table = 'vtd_hoa_don';

    protected $primaryKey = 'id';

    public $timestamps = true;

    // Quan hệ ngược lại với vtd_CT_HOA_DON
   
}
