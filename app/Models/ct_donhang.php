<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ct_donhang extends Model
{
    protected $table='ct_don_hang';
    public $timestamps = false;

   public function cthanghoa() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTO('App\Models\hang_hoa','id_hanghoa','id');
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    
}
