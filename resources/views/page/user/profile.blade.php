@extends('page.layout')
@section('tieude','Tài khoản')
@section('page_content')
<!-- products-breadcrumb -->
@section('header_small')
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/trang-chu">Home</a><span>|</span></li>
				<li>Tài khoản</li>
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
				<h3>Chính sách bảo mật</h3>
				<div class="banner-bottom-grid1 privacy1-grid">
					<ul>
						<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i></li>
						<li><a href="{{Route('edit1',['id' => Auth::user()->id])}}">Thông tin cá nhân </a>
							<span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span>
						</li>
					</ul>
					
					<ul>
						<li><i class="glyphicon glyphicon-paste" aria-hidden="true"></i></li>
						<li><a href="{{Route('donhang')}}"> Đơn hàng </a> 
							<span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span>
						</li>
					</ul>
					
				</div>
			</div>
			<div class="privacy1">
				<h3>Điều khoản sử dụng</h3>
				<div class="banner-bottom-grid1 privacy2-grid">
					<div class="privacy2-grid1">
						<h4>deserunt mollit anim id est laborum?</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						<div class="privacy2-grid1-sub">
							<h5>1. sint occaecat cupidatat non proident, sunt</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>2.perspiciatis unde omnis iste natus error</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>3. natus error sit voluptatem accusant</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>4. occaecat cupidatat non proident, sunt in</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>5. deserunt mollit anim id est laborum</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- //privacy -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
@endsection