<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hang_hoa;

class TimkiemController extends Controller
{
    public function post_search(Request $rq)
    {
        
        $tukhoa = $rq->tukhoa;

        $sanpham = hang_hoa::where('ten_hh','like',"%$tukhoa%")->get();
        $sanpham2 = hang_hoa::where('ten_hh','like',"%$tukhoa%")->count();

        $collection = collect([$sanpham2]);
        $banhbao = $collection->sum();

        return view('page.tim-kiem.tim-kiem',['sanpham'=>$sanpham,'banhbao'=>$banhbao,'tukhoa'=>$tukhoa]);

    }
}
