<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hang_hoa;
use App\Models\nhom_hang_hoa;



class PageController extends Controller
{

    // public function nhomhh(){
    //   $nhomhh = nhom_hang_hoa::all();
    //   return view('page.layout',['nhomhh' => $nhomhh]);
    // }

    public function home(){
      return view('page.index');
    }

    public function sanpham2(){
      $sanpham = hang_hoa::paginate(12);
      return view('page.san-pham.list',['sanpham'=>$sanpham]);
    }

    public function ct_sp(){
      return view('page.chi-tiet');
    }


    public function gio_hang(){
      return view('page.gio-hang.gio-hang');
    }

    
    //////
   
    public function gia_dung(){
      
      $giadung = hang_hoa::where('ma_nhom','=','5')->paginate(4);
      return view('page.gia-dung.do-gia-dung',['giadung'=>$giadung]);
    }

     public function ct_gd($id){
      $giadung = hang_hoa::find($id);
      $giadung2 = hang_hoa::where('ma_nhom','=','5')->where('noi_bat','=','1')->take(4)->get();
      return view('page.gia-dung.chi-tiet',['giadung'=>$giadung,'giadung2'=>$giadung2]);
    }
    //////



    //////
    public function rau_qua(){
      $rauqua = hang_hoa::where('ma_nhom','=','6')->paginate(4);
      return view('page.rau-qua.rau-qua',['rauqua'=>$rauqua]);
    }


    public function ct_rc($id){
      $rauqua = hang_hoa::find($id);
      $rauqua2 = hang_hoa::where('ma_nhom','=','6')->where('noi_bat','=','1')->take(4)->get();
      return view('page.rau-qua.chi-tiet',['rauqua'=>$rauqua,'rauqua2'=>$rauqua2]);
    }

    //////
    public function trai_cay(){
      $traicay = hang_hoa::where('ma_nhom','=','7')->paginate(4);
      return view('page.trai-cay.trai-cay',['traicay'=>$traicay]);
    }
    //////
    public function ct_tc($id){
      $traicay = hang_hoa::find($id);
      $traicay2 = hang_hoa::where('ma_nhom','=','7')->where('noi_bat','=','1')->take(4)->get();
      return view('page.trai-cay.chi-tiet',['traicay'=>$traicay,'traicay2'=>$traicay2]);
    }

    public function nha_bep(){
      $nhabep = hang_hoa::where('ma_nhom','=','8')->paginate(4);
      return view('page.nha-bep.nha-bep',['nhabep'=>$nhabep]);
    }
    //////
    public function ct_nb($id){
      $nhabep = hang_hoa::find($id);
      $nhabep2 = hang_hoa::where('ma_nhom','=','8')->where('noi_bat','=','1')->take(4)->get();
      return view('page.nha-bep.chi-tiet',['nhabep'=>$nhabep,'nhabep2'=>$nhabep2]);
    }


     public function nuoc_ep(){
      $nuocep = hang_hoa::where('ma_nhom','=','9')->paginate(4);
      return view('page.nuoc-ep.nuoc-ep',['nuocep'=>$nuocep]);
    }
    //////
    public function ct_ne($id){
      $nuocep = hang_hoa::find($id);
      $nuocep2 = hang_hoa::where('ma_nhom','=','9')->where('noi_bat','=','1')->take(4)->get();
      return view('page.nuoc-ep.chi-tiet',['nuocep'=>$nuocep,'nuocep2'=>$nuocep2]);
    }



    public function nuoc_ngot(){
      $nuocngot = hang_hoa::where('ma_nhom','=','10')->paginate(4);
      return view('page.nuoc-ngot.nuoc-ngot',['nuocngot'=>$nuocngot]);
    }
    //////
    public function ct_nn($id){
      $nuocngot = hang_hoa::find($id);
      $nuocngot2 = hang_hoa::where('ma_nhom','=','10')->where('noi_bat','=','1')->take(4)->get();
      return view('page.nuoc-ngot.chi-tiet',['nuocngot'=>$nuocngot,'nuocngot2'=>$nuocngot2]);
    }



    public function thucan(){
      $thucan = hang_hoa::where('ma_nhom','=','11')->paginate(4);
      return view('page.thuc-an-thu-cung.thuc-an-thu-cung',['thucan'=>$thucan]);
    }
    //////
    public function ct_ta($id){
      $thucan = hang_hoa::find($id);
      $thucan2 = hang_hoa::where('ma_nhom','=','11')->where('noi_bat','=','1')->take(4)->get();
      return view('page.thuc-an-thu-cung.chi-tiet',['thucan'=>$thucan,'thucan2'=>$thucan2]);
    }



     public function banh_mi(){
      $banhmi = hang_hoa::where('ma_nhom','=','12')->paginate(4);
      return view('page.tiem-banh-mi.tiem-banh-mi',['banhmi'=>$banhmi]);
    }
    //////
    public function ct_bm($id){
      $banhmi = hang_hoa::find($id);
      $banhmi2 = hang_hoa::where('ma_nhom','=','12')->where('noi_bat','=','1')->take(4)->get();
      return view('page.tiem-banh-mi.chi-tiet',['banhmi'=>$banhmi,'banhmi2'=>$banhmi2]);
    }












    public function giohang(){
      return view('page.cart');
    }

    public function thanhtoan(){
      return view('page.checkout');
    }

    public function tintuc(){
      return view('page.blog');
    }

  public function chitiet_tintuc(){
      return view('page.single-blog');
    }


    public function khuyenmai(){
      return view('page.khuyenmai');
    }

    public function chitiet_khuyenmai(){
      return view('page.single-khuyenmai');
    }
    


   
}
