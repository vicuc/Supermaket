<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Cart;

use App\Models\don_hang;
use App\Models\ct_donhang;



class DonhangController extends Controller
{
	//admin
    public function donhang_ad()
	{
		$donhang = don_hang::all();
		return view('admin.don-hang.list',['donhang' => $donhang]);
	}

	///page
	public function page_donhang()
	{
		$user = Auth::user()->id;
		$list = don_hang::where('id_khachhang','=',$user)->get();
		return view('page.user.don-hang',['list'=>$list]);
	}

	public function post_donhang(Request $dh)
	{	
        $cart = Cart::content();
        $cart2 = Cart::total(0,',',''); // bỏ dấu chấm đê đúng giá tiền ra

        // echo $cart2;die;


		$donhang = new don_hang;
		if($donhang){
			$donhang->id_khachhang = Auth::user()->id;
			$donhang->trang_thai = 0;
			$donhang->gia_donhang = $cart2;

			$donhang->name_order  = $dh->name;
			$donhang->phone_order  = $dh->phone_order;
			$donhang->address_order  = $dh->diachi;
			$donhang->city_order  = $dh->city;


			$donhang->ngay_dat = Carbon::now('Asia/Ho_Chi_Minh');
			$donhang->save();
        }
            $user_id = "DH00".$donhang->id;
            $donhang->ma_donhang = $user_id;
            $donhang->save();

            if(count($cart)>0){
            	// $cart2 = Cart::total(0,',','.');
            	foreach($cart as $key => $sp){
	            	$ct_dh = new ct_donhang;
		            $ct_dh->id_donhang = $donhang->id;
		            $ct_dh->id_hanghoa = $sp->id;
		            $ct_dh->so_luong_sp = $sp->qty;
	            	$ct_dh->save();

            	}
            }

            Cart::destroy();
            return redirect(''.Route('donhang').'');
	}

	public function page_ct_donhang($id)
	{
		$list2 = don_hang::find($id);

		return view('page.user.chi-tiet',['list2'=>$list2]);
	}

	public function dat_don($id)
    {   
       // tac_gia::where('id',$id)->update(['phe_duyet'=>1]);
       //  return redirect('/Ntkd@@/danh-sach-tac-gia');
        $data = don_hang::where('id',$id)->update(['trang_thai'=>0]);
        //var_dump($data);die;
        // Session::put('msg','')
        return redirect()->back();
        
    }

    public function xu_ly($id)
    {   
       // tac_gia::where('id',$id)->update(['phe_duyet'=>1]);
       //  return redirect('/Ntkd@@/danh-sach-tac-gia');
        $data = don_hang::where('id',$id)->update(['trang_thai'=>1]);
        //var_dump($data);die;
        // Session::put('msg','')
        return redirect()->back();
        
    }

    public function van_chuyen($id)
    {   
       // tac_gia::where('id',$id)->update(['phe_duyet'=>1]);
       //  return redirect('/Ntkd@@/danh-sach-tac-gia');
        $data = don_hang::where('id',$id)->update(['trang_thai'=>2]);
        //var_dump($data);die;
        // Session::put('msg','')
        return redirect()->back();
        
    }

    public function thanh_cong($id)
    {   
       // tac_gia::where('id',$id)->update(['phe_duyet'=>1]);
       //  return redirect('/Ntkd@@/danh-sach-tac-gia');
        $data = don_hang::where('id',$id)->update(['trang_thai'=>3]);
        //var_dump($data);die;
        // Session::put('msg','')
        return redirect()->back();
        
    }

    public function Cancle($id)
    {   
       // tac_gia::where('id',$id)->update(['phe_duyet'=>1]);
       //  return redirect('/Ntkd@@/danh-sach-tac-gia');
        $data = don_hang::where('id',$id)->update(['trang_thai'=>4]);
        //var_dump($data);die;
        // Session::put('msg','')
        return redirect()->back();
    }
}
