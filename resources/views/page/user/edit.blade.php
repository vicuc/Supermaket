@extends('page.layout')
@section('tieude','Thông tin cá nhân')
@section('page_content')
<!-- products-breadcrumb -->
@section('header_small')
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/trang-chu">Home</a><span>|</span></li>
				<li><a href="{{Route('profile1')}}">Tài khoản</a><span>|</span></li>
				<li>Thông tin cá nhân</li>
			</ul>
		</div>
	</div>
@endsection

<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_right">
<!-- privacy -->
		<div class="privacy">
			<div class="privacy1">
				<h3>Thông tin cá nhân : {{$user->ten_user}}</h3>
				@if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif
                @if(session('oldpw'))
                    <div class="alert alert-danger">  {{session('oldpw')}}</div>
                @endif
                @if(session('tintucxoa'))
                    <div class="alert alert-info">  {{session('tintucxoa')}}</div>
                @endif

				<form action="{{Route('edit2',['id' => $user->id])}}" method="POST" >
					{{ csrf_field() }}

					<div class="form-group">
						<label style="color: #999">Tài khoản</label>
						<input class="form-control" value="{{$user->username}}" readonly="">
					</div>

					<div class="form-group">
						<label style="color: #999">Họ tên</label>
						<input class="form-control" name="hoten" value="{{$user->ten_user}}" >
					</div>

					<div class="form-group">
						<label style="color: #999">Email</label>
						<input class="form-control" name="email" value="{{$user->email}}" >
					</div>


					<div class="form-group">
						<label style="color: #999">Số điện thoại</label>
						<input class="form-control" name="phone" value="0{{$user->phone}}" >
					</div>


					<div class="form-group">
						<label style="color: #999">Ngày tham gia</label>
						<input class="form-control" value="{{ date("d-m-Y || H:i A",strtotime($user->create)) }}" disabled="">
					</div>
					

					<div class="form-group " >

                        <input type="checkbox" id="changepassword" name="changepassword" > <span style="color:red">Đổi mật khẩu</span>

                        

                        <input type="password" class="form-control password" name="oldpassword" placeholder="Mật khẩu cũ" disabled="" >
                       
                    </div>

                    <div class="form-group " >

                        <input type="password" class="form-control password" name="password" placeholder="Mật khẩu" disabled="" >
                    </div>

                    <div class="form-group " >

                        <input type="password" class="form-control password" name="passwordAgain" placeholder="Nhập lại mật khẩu" disabled="" >
                    </div>

					<button style="float:right" type="submit" class="btn btn-success">Cập nhật</button>
				</form>
				
			</div>
			
		</div>
<!-- //privacy -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<script type="text/javascript">
    $(document).ready(function(){
        $("#changepassword").change(function(){
            if($(this).is(":checked"))
            {
                $(".password").removeAttr('disabled');
            }
            else
            {
                $(".password").attr('disabled','');
            }
        });
    });
</script>
@endsection