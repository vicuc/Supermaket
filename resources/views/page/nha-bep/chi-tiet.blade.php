@extends('page.layout')
@section('tieude','Sản phẩm nhà bếp')
@section('page_content')
<!-- products-breadcrumb -->
@section('header_small')
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">Home</a><span>|</span></li>
				<li>Sản phẩm nhà bếp</li>
			</ul>
		</div>
	</div>
@endsection

	<div class="banner">
		
		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner3">
			</div>
			<div class="agileinfo_single">
				<h5>{{$nhabep->ten_hh}}</h5>
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" width="190px" height="190px" style="margin-left: 10%" src="{{asset('public/admin/upload/hang-hoa/')}}/{{$nhabep->hinh_anh}}" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8 agileinfo_single_right">
					
					<div class="w3agile_description">
						<h4>Mô tả :</h4>
						<p>{!! $nhabep->mo_ta !!}.</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4>{{ number_format($nhabep->gia_hh,0) }}đ <span>{{ number_format($nhabep->gia_km,0) }}đ</span></h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									
									<a href="{{Route('addcart',['id' => $nhabep->id])}}" class="btn btn-primary" style="background-color: #03a9f4"/>Thêm vào giỏ hàng</a>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- brands -->

	<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
		<div class="container" style="width: 100%;">
			<h3>Sản phẩm gia dụng nổi bật</h3>

				<div class="w3ls_w3l_banner_nav_right_grid1">
					
					@foreach($nhabep2 as $sp)
					<div class="col-md-3 w3ls_w3l_banner_left" >
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{asset('public/page/images/offer.png')}}" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1" >
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb" style="width: 100%; text-align: center">
											<a href="{{Route('ct1',['id' => $sp->id])}}"><img src="{{asset('public/admin/upload/hang-hoa/')}}/{{$sp->hinh_anh}}" alt=" " class="img-responsive" /></a>
											<p>{{$sp->ten_hh}}</p>
											Giá : <h4>{{ number_format($sp->gia_hh,0) }}đ <span>{{ number_format($sp->gia_km,0) }}đ</span></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="knorr instant soup" />
													<input type="hidden" name="amount" value="3.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Thêm giỏ hàng" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					@endforeach
					
					<div class="clearfix"> </div>
				</div>
				
		</div>
	</div>
<!-- //brands -->
@endsection