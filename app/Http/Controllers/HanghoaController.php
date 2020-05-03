<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hang_hoa;
use App\Models\nhom_hang_hoa;
use Carbon\Carbon;



class HanghoaController extends Controller
{	

	public function list(){

		$hanghoa = hang_hoa::all();
		return view('admin.hang-hoa.list',['hanghoa'=>$hanghoa]); 

	}

	public function get_add(){

    	$nhomhanghoa = nhom_hang_hoa::all();
        return view('admin.hang-hoa.add',['nhomhanghoa'=>$nhomhanghoa]);
    }


   public function post_add(Request $hh)
   {

		

   	 $hanghoa = new hang_hoa;

   	 		if($hanghoa){


				 $hanghoa->ma_nhom = $hh->nhomhanghoa;
				 $hanghoa->ten_hh = $hh->ten;
				 $hanghoa->mo_ta = $hh->mota;
				 $hanghoa->gia_hh = $hh->giagoc;
				 $hanghoa->gia_km = $hh->khuyenmai;
				 $hanghoa->soluong_hang = $hh->soluong;
				 $hanghoa->trong_luong = $hh->trongluong;

				 $hanghoa->ngay_lap = Carbon::now('Asia/Ho_Chi_Minh');
				 $hanghoa->update = Carbon::now('Asia/Ho_Chi_Minh');


				 if($hh->hasFile('image'))
				    {
				        $file = $hh->file('image');

				        // echo $file;die;

				        // kiểm tra  size
				        $size = $file->getsize();
				        if($size > 1024*1024)
				        {
				            // echo "size quá lớn chọn lại";

				             return redirect('/admin/danh-sach-hang-hoa/them-hang-hoa')->with('size','size quá lớn chọn lại');
				        }
				        // echo "banhbao";die;

				        //kiểm tra đuôi, lấy ra đuôi file getClientOriginalExtension()
				         $duoi_file = $file->getClientOriginalExtension();
				         //tạo 1 mang arr để sử dụng in_array so sanh
				         $arr_duoifile = ['png','jpg','jpeg','PNG','JPG','JPEG'];
				         

				        if(!in_array($duoi_file, $arr_duoifile))
				        {
				            // echo "Đuôi file size xin mời định dạng lại";

				            return redirect('/admin/danh-sach-hang-hoa/them-hang-hoa')->with('duoi_file','Bạn chỉ được thêm file có đuôi là JPG, PNG, JPEG');
				        }
				        // echo "banhbao";die;

				        // radom tên hinh ảnh, để lấy ra không bị trùng
				        //,... getClientOriginalName() lấy ra tên
				        $name = $file->getClientOriginalName();
				        $hinh_anh = str_random(5)."_".$name;

				        // echo $hinh_anh;die;
				        while(file_exists('public/admin/upload/hang-hoa/'.$hinh_anh))
				        {
				             $hinh_anh = str_random(4)."_".$name;
				        }
				         // echo $name; die; 
				        $file->move('public/admin/upload/hang-hoa/',$hinh_anh);
				        $hanghoa->hinh_anh = $hinh_anh;
				       

				    }
				    else
				    {
				        $hanghoa->hinh_anh = "";
				    }
				    
				    $hanghoa->save();

				}

				$hanghoa->ms_hh = "HH00".$hanghoa->id;
				$hanghoa->save();

        return redirect('/admin/danh-sach-hang-hoa');

    }

    public function get_edit($id){
    	$hanghoa = hang_hoa::find($id);
    	$nhomhanghoa = nhom_hang_hoa::all();
        return view('admin.hang-hoa.edit',['nhomhanghoa'=>$nhomhanghoa,'hanghoa'=>$hanghoa]);
    }


    public function post_edit(Request $hh, $id){

    		 $hanghoa = hang_hoa::find($id);
    		 $hanghoa->ma_nhom = $hh->nhomhanghoa;
			 $hanghoa->ten_hh = $hh->ten;
			 $hanghoa->mo_ta = $hh->mota;
			 $hanghoa->gia_hh = $hh->giagoc;
			 $hanghoa->gia_km = $hh->khuyenmai;
			 $hanghoa->soluong_hang = $hh->soluong;
			 $hanghoa->trong_luong = $hh->trongluong;

			 $hanghoa->update = Carbon::now('Asia/Ho_Chi_Minh');


			 if($hh->hasFile('image'))
			    {
			        $file = $hh->file('image');

			        // echo $file;die;

			        // kiểm tra  size
			        $size = $file->getsize();
			        if($size > 1024*1024)
			        {
			            // echo "size quá lớn chọn lại";

			             return redirect('/admin/danh-sach-hang-hoa/sua-hang-hoa-'.$id.'.html')->with('size','size quá lớn chọn lại');
			        }
			        // echo "banhbao";die;

			        //kiểm tra đuôi, lấy ra đuôi file getClientOriginalExtension()
			         $duoi_file = $file->getClientOriginalExtension();
			         //tạo 1 mang arr để sử dụng in_array so sanh
			         $arr_duoifile = ['png','jpg','jpeg','PNG','JPG','JPEG'];
			         

			        if(!in_array($duoi_file, $arr_duoifile))
			        {
			            // echo "Đuôi file size xin mời định dạng lại";

			            return redirect('/admin/danh-sach-hang-hoa/sua-hang-hoa-'.$id.'.html')->with('duoi_file','Bạn chỉ được thêm file có đuôi là JPG, PNG, JPEG');
			        }
			        // echo "banhbao";die;

			        // radom tên hinh ảnh, để lấy ra không bị trùng
			        //,... getClientOriginalName() lấy ra tên
			        $name = $file->getClientOriginalName();
			        $hinh_anh = str_random(5)."_".$name;

			        // echo $hinh_anh;die;
			        while(file_exists('public/admin/upload/hang-hoa/'.$hinh_anh))
			        {
			             $hinh_anh = str_random(4)."_".$name;
			        }
			         // echo $name; die; 
			        $file->move('public/admin/upload/hang-hoa/',$hinh_anh);

			        if($hanghoa->hinh_anh){
	                    unlink('public/admin/upload/hang-hoa/'.$hanghoa->hinh_anh);
	                    $hanghoa->hinh_anh = $hinh_anh;
	                }
	                else
	                {   
	                    $hanghoa->hinh_anh = $hinh_anh;
	                }

			        $hanghoa->hinh_anh = $hinh_anh;
			       

			    }
			    
			    $hanghoa->save();

				return redirect('/admin/danh-sach-hang-hoa');

		}


		public function del($id)
    {
        // echo "đã xóa";die;
        $hanghoa2 = hang_hoa::find($id); // phải gắn find trước nếu gắn destroy trước thì nó xóa trước ko thể find dc
        $hang_hoa = hang_hoa::destroy($id);
        if($hanghoa2->hinh_anh){
            unlink('public/admin/upload/hang-hoa/'.$hanghoa2->hinh_anh);
        }
        return redirect()->bacK()->with('thongbaoxoa','Bạn đã xóa thành công...!');
    }




    }






