@extends('page.layout')
@section('tieude','Đăng nhập & Đăng ký')
@section('page_content')

<!-- products-breadcrumb -->
@section('header_small')
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">Home</a><span>|</span></li>
				<li>Đăng nhâp & đăng ký</li>
			</ul>
		</div>
	</div>
@endsection
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
	<div class="w3l_banner_nav_right">
	<!-- login -->
	<div class="w3_login">
		<h3>Đăng nhập & Đăng ký</h3>
		@if(count($errors) > 0)
                    <div  style="width: 50%;" class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-info">  {{session('thongbao')}}</div>
                @endif
		<br>
		
        @if(session('reg'))
            <div style="width: 40%; margin-left: 30%;text-align: center;" class="alert alert-success">{{session('reg')}}</div>
        @endif
        @if(session('disable'))
            <div style="width: 40%; margin-left: 30%; text-align: center;" class="alert alert-info">{{session('disable')}}</div>
        @endif
		<div class="w3_login_module">
			<div class="module form-module">
			  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
				<div class="tooltip">Đăng ký</div>
			  </div>
			  <div class="form">
				<h2>Đăng nhập</h2> 
				<form action="/dang-nhap" method="POST"> {{csrf_field()}} 
				  <input type="text" name="username" placeholder="Tên đăng nhập" >
				  <input type="password" name="password" placeholder="Password" >
				  <input type="submit" value="Đăng nhập">
				</form>
			  </div>
			  <div class="form">
				<h2>Tạo tài khoản</h2>
				<form action="/dang-ky" method="POST"> {{ csrf_field() }}
				   <input type="text" name="username" placeholder="Tên đăng nhập" >
				   <input type="password" name="password" placeholder="Mật khẩu" >
				   <input type="password" name="passwordAgain" placeholder="Nhập lại mật khẩu" >

				   <input type="email" name="email" placeholder="Email Address" >
				   <input type="text" name="phone" placeholder="Phone Number" >

				   <div class="checkbox">
	                    <input style="margin-left: 1px;" name="role" type="checkbox">
	                    <label class="banhbao" >Đọc và đồng ý với <a href="javascript:void(0);">các điều khoản diễn đàn</a></label>
                   </div>
				  <input type="submit" value="Đăng ký">
				</form>
			  </div>
			  <div style="background-color: #FF7F50" class="cta"><a href="#">Quên mật khẩu?</a></div>
			</div>
		</div>
		<script>
			$('.toggle').click(function(){
			  // Switches the Icon
			  $(this).children('i').toggleClass('fa-pencil');
			  // Switches the forms  
			  $('.form').animate({
				height: "toggle",
				'padding-top': 'toggle',
				'padding-bottom': 'toggle',
				opacity: "toggle"
			  }, "slow");
			});
		</script>
	</div>
	<!-- //login -->
	</div>
	<div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
<div class="newsletter-top-serv-btm">
	<div class="container">
		<div class="col-md-4 wthree_news_top_serv_btm_grid">
			<div class="wthree_news_top_serv_btm_grid_icon">
				<i class="fa fa-shopping-cart" aria-hidden="true"></i>
			</div>
			<h3>Nam libero tempore</h3>
			<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
				saepe eveniet ut et voluptates repudiandae sint et.</p>
		</div>
		<div class="col-md-4 wthree_news_top_serv_btm_grid">
			<div class="wthree_news_top_serv_btm_grid_icon">
				<i class="fa fa-bar-chart" aria-hidden="true"></i>
			</div>
			<h3>officiis debitis aut rerum</h3>
			<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
				saepe eveniet ut et voluptates repudiandae sint et.</p>
		</div>
		<div class="col-md-4 wthree_news_top_serv_btm_grid">
			<div class="wthree_news_top_serv_btm_grid_icon">
				<i class="fa fa-truck" aria-hidden="true"></i>
			</div>
			<h3>eveniet ut et voluptates</h3>
			<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
				saepe eveniet ut et voluptates repudiandae sint et.</p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //newsletter-top-serv-btm -->

@endsection