<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

class TaikhoanController extends Controller
{	
	public function login_reg()
    {
    	return view('page.dang-nhap');
    }

    public function post_reg(Request $reg)
    {
    	$this->validate($reg,[
            'role' => 'required',
            'phone' =>'required|min:2|max:32',
            'username' =>'required|min:7|max:20|unique:tai_khoan,username',
            'email' => 'required|email|max:50|unique:tai_khoan,email',
            'password' => 'required|min:3|max:50',
            'passwordAgain' => 'required|same:password'
            
        ],[
            'role.required' => 'Bạn chưa chọn đồng ý của điều khoản đăng ký !',

            'phone.required' => 'Bạn chưa nhập số điện thoại !',
            'phone.min' => 'Số điện thoại phải 10 số !',
            'phone.max' => 'Số điện thoại không được hơn 10 số !',

            'username.required' => 'Bạn chưa nhập tên đăng nhập !',
            'username.min' => 'Tên đăng nhập tối thiểu 7 ký tự trở lên !',
            'username.max' => 'Tên đăng nhập không được vượt hơn 20 ký tự !',
            'username.unique' => 'Tên đăng nhập đã tồn tại !',


            'email.required' => 'Bạn chưa nhập Email !',
            'email.email' => 'Định dạng Email chưa đúng vd: @gmail.com !',
            'email.max' => 'Email không được vượt hơn 50 ký tự !',
            'email.unique' => 'Email đã tồn tại !',



            'password.required' => 'Bạn chưa nhập mật khẩu !',
            'password.min' => 'Mật khẩu phải có it nhât 6 ký tự !',
            'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự !',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu !',
            'passwordAgain.same' => 'Nhập lại mật khẩu không trùng khớp !'
        ]);

        $user = new User;
        $user->username = $reg->username;
        $user->email = $reg->email;
        $user->phone = $reg->phone;

        $user->password = bcrypt($reg->password);
        $user->level = '0';
        $user->trang_thai = '1';


        $user->create = Carbon::now('Asia/Ho_Chi_Minh');
        $user->update = Carbon::now('Asia/Ho_Chi_Minh');


        $user->save();

        return redirect('/dang-nhap')->with('reg','Chúc mừng bạn đã đăng ký thành công');
    }

    public function post_lg(Request $lg)
    {
    	$this->validate($lg,[
            'username' => 'required',
            'password' =>'required|min:3|max:32',
            
        ],[
            'username.required' => 'Bạn chưa nhập tài khoản !',
            'password.required' => 'Bạn chưa nhập mật khẩu !',
        ]);

        $username =  $lg->username;
        $password = $lg->password;
        // echo $lg->username;
        // echo $lg->password;
        // die;


        if(Auth::attempt(['username'=>$username,'password'=>$password]))
            if(Auth::user()->trang_thai == 1)
            {
                
                    return redirect(''.Route('profile1').'');
               
            }
            else
            {
                return redirect()->back()->with('disable','Tài khoản bạn đã bị khóa !');
            }
        else
             return redirect()->back()->with('thongbao','Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại');
            //echo "Not OK";
    }

    public function logout()
    {
        Auth::logout();
        return redirect(''.Route('login').'');
    }

    public function profile()
    {   
        
            return view('page.user.profile');
        

    }

    public function edit($id)
    {   
        $user = User::find($id);
        return view('page.user.edit',['user'=>$user]);
    }

    public function post_edit($id, Request $tk)
    {
        $this->validate($tk,[
            'hoten' => 'required|min:2|max:32',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:10',


           
        ],[
            'email.required' => 'Bạn chưa nhập Email !',
            'email.email' => 'Định dạng Email chưa đúng vd: @gmail.com !',
            'email.max' => 'Email không được vượt hơn 50 ký tự !',
            // 'email.unique' => 'Email đã được đăng ký !',


            'phone.required' => 'Số điện thoại chưa nhập !',
            'phone.min' => 'Số điện thoại phải đủ 10 số !',
            'phone.max' => 'Số điện thoại không quá 10 số !',

            'hoten.required' => 'Bạn chưa nhập tên !',
            'hoten.min' => 'Tên tối thiểu 2 ký tự trở lên !',
            'hoten.max' => 'Tên không được vượt hơn 32 ký tự !',

            
           
        ]);

            $user = User::find($id);
             $user->ten_user = $tk->hoten;
             $user->email = $tk->email;
             
             $user->phone = $tk->phone;

             $oldPassword = $tk->oldpassword;
                $newPassword = $tk->password;


            if($tk->changepassword == "on")
            {   
             // <!-- sư dụng Auth thay vì $user vì Auth mạnh hơn -->
                if(Auth::user()->level == 1)
                {
                    $this->validate($tk,[
                        'password' => 'required|min:3|max:32',
                        'passwordAgain' => 'required|same:password'
                    ],[
                        'password.required' => 'Bạn chưa nhập mật khẩu',
                        'password.min' => 'Mật khẩu phải có it nhât 3 ký tự',
                        'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
                        'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
                        'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp'
                    ]);

                    $user->password= bcrypt($newPassword);
                
                }
                else
                {
                    //nhớ phải !, hàm 
                    if(!Hash::check($oldPassword, Auth::user()->password))
                    {
                        return redirect()->back()->with('oldpw','Mật khẩu không khớp với mật khẩu hiện tại');
                    }
                    else
                    {
                        $this->validate($tk,[
                            'password' => 'required|min:3|max:32',
                            'passwordAgain' => 'required|same:password'
                        ],[
                            'password.required' => 'Bạn chưa nhập mật khẩu',
                            'password.min' => 'Mật khẩu phải có it nhât 3 ký tự',
                            'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
                            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
                            'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp'
                        ]);

                        $user->password= bcrypt($newPassword);
                    }
                }
            }

             $user->update = Carbon::now('Asia/Ho_Chi_Minh');
             $user->save();
             return redirect()->bacK()->with('tintucxoa','Bạn đã xóa thành công...!');
    }

}
