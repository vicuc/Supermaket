<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hang_hoa extends Model
{
   protected $table='hang_hoa';
    public $timestamps = false;

   public function hhnhomhanghoa()
    {
      return $this->belongsTo('App\Models\nhom_hang_hoa','ma_nhom','id');
      // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function order_hh() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\ct_donhang','id_hanghoa','id');
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
