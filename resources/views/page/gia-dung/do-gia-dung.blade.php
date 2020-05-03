@extends('page.layout')
@section('tieude','Đồ gia dụng')
@section('page_content')
<!-- products-breadcrumb -->
@section('header_small')
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">Home</a><span>|</span></li>
				<li>Đồ gia dụng</li>
			</ul>
		</div>
	</div>
@endsection
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">

		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner4">
				
			</div>
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3 style="font-family: 'myFont';">Sản phẩm gia dụng</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					

					
					@foreach($giadung as $sp)
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
							<div style="width: 100%;" class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									@if($sp->noi_bat == 1)
										<img width="250px" height="250px" src="{{asset('public/page/images/offer.png')}}" alt=" " class="img-responsive" />
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
												{{-- <form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="toilet cleaner expert" />
														<input type="hidden" name="amount" value="6.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
													</fieldset>
												</form> --}}

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
						{{ $giadung->links() }}
					</nav>
				</div>



			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
@endsection
