<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\don_hang;
use App\Models\hang_hoa;
use App\User;
Use Illuminate\Support\Facades\Auth;




class AdminController extends Controller
{
    public function home()
    {
    	$donhang = don_hang::all()->count();
    	$tongtien = don_hang::where('trang_thai','=',3)->sum('gia_donhang');
    	$hanghoa = hang_hoa::all()->count();
    	$user = User::all()->count();


    	return view('admin.index',['user' => $user, 'hanghoa' => $hanghoa, 'donhang' => $donhang, 'tongtien' =>$tongtien]);
    }

    public function ad_login()
    {
    	return view('admin.login.dangnhap');
    }

    public function post_ad_login(Request $lg)
    {
    	if(Auth::attempt(['username'=>$lg->username,'password'=>$lg->password]))
            if(Auth::user()->trang_thai == 1)
            {
                
                return redirect(''.Route('ad1').'');
                
            }
            else
            {
                return redirect()->back()->with('disable','Tài khoản bạn đã bị khóa !');
            }
        else
             return redirect()->back()->with('thongbao','Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại');
            //echo "Not OK";
    }
}
