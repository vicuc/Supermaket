@extends('page.layout')
@section('tieude','Sản phẩm')
@section('page_content')
<!-- products-breadcrumb -->
@section('header_small')
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">Home</a><span>|</span></li>
				<li>Tất cả sản phẩm</li>
			</ul>
		</div>
	</div>
@endsection
	<div class="banner">

		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner3">
				
			</div>
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3 style="font-family: 'myFont';">Tất cả sản phẩm</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>Làm sạch</h6>

					
					@foreach($sanpham as $sp)
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
							<div style="width: 100%;" class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									@if($sp->noi_bat == 1)
										<img src="{{asset('public/page/images/offer.png')}}" alt=" " class="img-responsive" />
									@endif
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb" style="width: 110%; text-align: center">
												<a href="{{Route('ct1',['id' => $sp->id])}}"><img style="width: 200px; height: 200px;" src="{{asset('public/admin/upload/hang-hoa/')}}/{{$sp->hinh_anh}}" alt=" " class="img-responsive" /></a>
												<p>{{$sp->ten_hh}}</p>
												<h4>{{ number_format($sp->gia_km,0,',','.') }}đ <span>{{ number_format($sp->gia_hh,0,',','.') }}đ</span></h4>
												
											</div>
											<div class="snipcart-details">

												<a href="{{Route('addcart',['id' => $sp->id])}}" class="btn btn-primary" style="background-color: #03a9f4"/>Thêm vào giỏ hàng</a>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div> 
					@endforeach
					<div class="clearfix"> </div>
					<nav style="margin-left: 85%;">
						{{ $sanpham->links() }}
					</nav>
					
				</div>



			</div>
		</div>
		<div class="clearfix"></div>
	</div>
@endsection