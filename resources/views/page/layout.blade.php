<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>@yield('tieude')</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href="{{asset('public/page/favicon6.ico')}}" type="image/x-icon">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="{{asset('public/page/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />

	<link href="{{asset('public/page/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome icons -->
	<link href="{{asset('public/page/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="{{asset('public/page/js/okzoom.js')}}"></script>
	<script>
		$(function() {
			$('#example').okzoom({
				width: 150,
				height: 150,
				border: "1px solid black",
				shadow: "0 0 5px #000"
			});
		});
	</script>
	<!-- //js -->
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{asset('public/page/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/page/js/easing.js')}}"></script>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>

	<!-- start-smoth-scrolling -->
</head>

<body>
	<div class="agileits_header" style="padding: 6px;">
		<div class="container" style="display: flex">
			<div style="flex-grow: 1">
				<form style="max-width: 320px; display: flex;" action="/tim-kiem" method="POST"> {{ csrf_field() }}
					<input type="search" name="tukhoa" class="form-control" placeholder="Seach....." required="" />
					<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
				</form>
			</div>

			<div class="product_list_header">
				<a style="background-color:#03a9f4;" href="/gio-hang" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> {{Cart::count()}}</a>
			</div>

			<div class="w3l_header_right">
				<ul>
					@if(Auth::check())
					<li class="dropdown profile_details_drop">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i style="color: #03a9f4;" class="fa fa-user" aria-hidden="true"></i> {{Auth::user()->ten_user}}<span class="caret"></span></a>
						<div class="mega-dropdown-menu">
							<div class="w3ls_vegetables">
								<ul class="dropdown-menu drp-mnu">
									<li><a href="/tai-khoan">Tài khoản</a></li>
									<li><a href="{{Route('logout')}}">Đăng xuất</a></li>
								</ul>
							</div>
						</div>
					</li>
					@else
					<li class="dropdown profile_details_drop">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i style="color: #FA1818;" class="fa fa-user" aria-hidden="true"></i> Tài khoản <span class="caret"></span></a>
						<div class="mega-dropdown-menu">
							<div class="w3ls_vegetables">
								<ul class="dropdown-menu drp-mnu">
									<li><a href="/dang-nhap">Đăng nhập</a></li>
									<li><a href="/dang-nhap">Đăng ký</a></li>
								</ul>

							</div>
						</div>
					</li>
					@endif
				</ul>
			</div>
		</div>
	</div>
	<!-- script-for sticky-nav -->
	<script>
		$(document).ready(function() {
			var navoffeset = $(".agileits_header").offset().top;
			$(window).scroll(function() {
				var scrollpos = $(window).scrollTop();
				if (scrollpos >= navoffeset) {
					$(".agileits_header").addClass("fixed");
				} else {
					$(".agileits_header").removeClass("fixed");
				}
			});

		});
	</script>
	<!-- //script-for sticky-nav -->
	<div class="logo_products">

		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="/"><span style="color: #03a9f4">VI CUC</span> SUPERMAKET</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="events.html">Sự kiện</a><i>/</i></li>
					<li><a href="about.html">Giới thiệu</a><i>/</i></li>
					<li><a href="products.html">Ưu đãi</a><i>/</i></li>
					<li><a href="services.html">Dịch vụ</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(034) 231 1010</li> &nbsp&nbsp
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">vicuc@gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header -->
	@yield('header_small')
	<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="{{Route('gg1')}}">Tất cả sản phẩm</a></li>
						<li><a href="{{Route('page1')}}">Gia dụng</a></li>
						<li class="dropdown mega-dropdown active">
							<a class="dropdown-toggle" data-toggle="dropdown">Rau củ và trái cây<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="{{Route('page2')}}">Rau củ</a></li>
										<li><a href="{{route('page3')}}">Trái cây</a></li>
									</ul>
								</div>
							</div>
						</li>

						<li><a href="{{Route('page4')}}">Nhà bếp</a></li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Đồ uống<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="{{Route('page5')}}">Nước ép</a></li>
										<li><a href="{{Route('page6')}}">Nước ngọt</a></li>

									</ul>
								</div>
							</div>
						</li>
						<li><a href="{{Route('page7')}}">Thức ăn thú cưng</a></li>

						<li><a href="{{Route('page8')}}">Tiệm bánh mì</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>


		@yield('page_content')

		<!-- newsletter -->
		<div class="newsletter">
			<div class="container">
				<div class="w3agile_newsletter_left">
					<h3>Đăng Ký Nhận Bản Tin Của Chúng Tôi
					</h3>
				</div>
				<div class="w3agile_newsletter_right">
					<form action="#" method="post">
						<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="submit" value="Gửi">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //newsletter -->
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<div class="col-md-4 w3_footer_grid">
					<h3>Thông tin</h3>
					<ul class="w3_footer_grid_list">
						<li><a href="events.html">Tin tức khuyến mãi</a></li>
						<li><a href="about.html">Giới thiệu</a></li>
						<li><a href="services.html">Dịch vụ</a></li>
					</ul>
				</div>
				<div class="col-md-4 w3_footer_grid">
					<h3>Chính sách</h3>
					<ul class="w3_footer_grid_list">
						<li><a href="faqs.html">FAQ</a></li>
						<li><a href="privacy.html">Chính sách bảo mật</a></li>
						<li><a href="privacy.html">Điều khoản sử dụng</a></li>
					</ul>
				</div>
				<div class="col-md-4 w3_footer_grid">
					<h3>Danh mục sản phẩm</h3>
					<ul class="w3_footer_grid_list">
						<li><a href="pet.html">Sản phẩm</a></li>
						<li><a href="frozen.html">Rau-củ-quả</a></li>
						<li><a href="products.html">Bánh mì</a></li>
					</ul>
				</div>

				<div class="clearfix"> </div>

			</div>
			<!-- //footer -->
			<!-- Bootstrap Core JavaScript -->
			<!--quantity-->





			<script>
				$(document).ready(function() {
					$(".dropdown").hover(
						function() {
							$('.dropdown-menu', this).stop(true, true).slideDown("fast");
							$(this).toggleClass('open');
						},
						function() {
							$('.dropdown-menu', this).stop(true, true).slideUp("fast");
							$(this).toggleClass('open');
						}
					);
				});
			</script>
			<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {


					$().UItoTop({
						easingType: 'easeOutQuart'
					});

				});
			</script>
			<!-- //here ends scrolling icon -->



</body>

</html>