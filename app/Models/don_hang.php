<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class don_hang extends Model
{
    protected $table='don_hang';
    public $timestamps = false;

    public function ctdonhang() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\ct_donhang','id_donhang','id');
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function userdh() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\User','id_khachhang','id');
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    
}
