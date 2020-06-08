@extends('admin.login.layout')
@section('login_content')
<div class="log-w3">
<div class="w3layouts-main">
	<h2 style="color:#FFE4C4; text-align: center">Trang Quản Trị</h2>
	@if(session('thongbao'))
			<div class="alert alert-danger">{{session('thongbao')}}</div>
	@endif
		<form action="{{Route('login2')}}" method="post">{{csrf_field()}}
			<input type="text" class="ggg" name="username" placeholder="Tài khoản đăng nhập" required="">
			<input type="password" class="ggg" name="password" placeholder="Mật khẩu" required="">
			<span><input type="checkbox" />Nhớ tên đăng nhập</span>
			<h6><a href="{{Route('login2')}}">Quên mật khẩu</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Đăng nhập" name="login">
		</form>
		<!-- <p>Nếu bạn chưa có tài khoản ?<a href="#">Mời bạn đăng ký !</a></p> -->
</div>
</div>
@endsection

