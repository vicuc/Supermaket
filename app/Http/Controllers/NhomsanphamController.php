<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\nhom_hang_hoa;



class NhomsanphamController extends Controller
{
	 public function list(){

   
        $nhomhanghoa = nhom_hang_hoa::all();
        return view('admin.nhom-hang-hoa.list',['nhomhanghoa'=>$nhomhanghoa]);
    }

    public function get_add(){
        return view('admin.nhom-hang-hoa.add');
    }

    // thêm sữa xóa loại bài
    public function post_add(Request $nhh){
        $this->validate($nhh,[
            'ten' => 'required|min:2|max:32',
            
        ],[
            'ten.required' => 'Bạn chưa nhập tiêu đề !',
            'ten.min' =>'Tên tiêu đề phải tối thiểu 2 ký tự !',
            'ten.max' =>'Tên tiêu đề phải tối đa 32 ký tự !',
        ]);
        
        $nhomhanghoa = new nhom_hang_hoa;
        $nhomhanghoa->ten_nhom= $nhh->ten;

       
        $nhomhanghoa->save();
        return redirect('/admin/danh-sach-nhom-hang-hoa');
    }

    public function get_edit($id){
        $nhomhanghoa = nhom_hang_hoa::find($id);
        return view('admin.nhom-hang-hoa.edit',['nhomhanghoa'=>$nhomhanghoa]);
    }
    public function post_edit(Request $request,$id){
        $this->validate($request,[
            'ten' => 'required|min:5|max:32',
            
        ],[
            'ten.required' => 'Bạn chưa nhập tiêu đề !',
            'ten.min' =>'Tên tiêu đề phải tối thiểu 5 ký tự !',
            'ten.max' =>'Tên tiêu đề phải tối đa 32 ký tự !',
        ]);

        $nhomhanghoa = nhom_hang_hoa::find($id);
        $nhomhanghoa->ten_nhom= $request->ten;


        $nhomhanghoa->save();

        return redirect('/admin/danh-sach-nhom-hang-hoa');

    }
    public function del($id){
        $nhomhanghoa = nhom_hang_hoa::destroy($id);
        return redirect()->bacK()->with('thongbaoxoa','Bạn đã xóa thành công...!');
    }
    
}
