<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
Use Illuminate\Support\Facades\Auth;
use App\Models\hang_hoa;



class GiohangController extends Controller
{	
	public function showcart(){
		
		$data['total'] = Cart::total(0,',','.'); // cấu hinh format năm ở trong đây ở ngoài html ko sư dụng dc
		$data['cart'] = Cart::content();
		return view('page.gio-hang.gio-hang',$data);
	}

    public function addCart($id)
    {
    	// dd($id);
    	$sp = hang_hoa::find($id);
    	Cart::add(['id' => $id,  
    			   'name' => $sp->ten_hh,
    			   'qty' => 1,
    			   'price' => $sp->gia_km,
    			   'weight' => $sp->trong_luong,
    			   'options' => ['img' => $sp->hinh_anh]]);
    	

    	return redirect('/gio-hang');
    	// $data = Cart::content();
    	// dd($data);
   	}

    public function update(Request $request){
      $qty = $request->qty;
      $rowId = $request->rowId;
      // update cart
      Cart::update($rowId,$qty);
      
    }


   	public function delCart($id)
    {
    	if($id == 'all')
    	{
    		Cart::destroy($id);
    	}
    	else
    	{
    		Cart::remove($id);
    	}
    	return back();
   	}
}
