@extends('page.layout')
@section('tieude','Chi tiết đơn hàng')
@section('page_content')
<!-- products-breadcrumb -->
@section('header_small')
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/trang-chu">Home</a><span>|</span></li>
				<li><a href="{{Route('profile1')}}">Tài khoản</a><span>|</span></li>
				<li><a href="{{Route('donhang')}}">Đơn hàng</a><span>|</span></li>

				<li>Chi tiết đơn hàng : {{$list2->ma_donhang}} </li>
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
				<h3>Chi tiết đơn hàng : {{$list2->ma_donhang}} 
					@if($list2->trang_thai == 0)
							    	
				    		<a  style="float:right; margin-right: 20px;" class="btn btn-success">{{'Đặt hàng thành công' }}</a>
				    	
				    	@elseif($list2->trang_thai == 1)
				    	
							<a style="float:right; margin-right: 20px;" class="btn btn-warning">{{'Đang xử lý'}}</a>
				    	
				    	@elseif($list2->trang_thai == 2)
				    	
							<a style="background-color: #7B68EE; color: #fff; float:right; margin-right: 20px;" class="btn btn-light">{{'Đang vận chuyển'}}</a>
				    	
				    	@elseif($list2->trang_thai == 3)
				    	
							<a style="float:right; margin-right: 20px;" class="btn btn-info">{{'Thành công'}}</a>

						@elseif($list2->trang_thai == 4)
				    	
							<a style="background-color: #F08080; color: #fff; float:right; margin-right: 20px;" class="btn btn-light">{{'Đã Hủy'}}</a>
				    	
				    	@endif
</h3>
				@php
					$stt = 1;
				@endphp
				<table class="table">
					<thead>
					    <tr>
					      <th scope="col">STT</th>
					      <th scope="col">Hình ảnh</th>

					      <th scope="col">Sản phẩm</th>
					      <th scope="col">Số lượng</th>
					      <th scope="col">Giá tiền</th>
					      	
					    </tr>
					</thead>
					<tbody>
						@foreach($list2->ctdonhang as $ct)
						    <tr>
							    <th scope="row">{{$stt++}}</th>
							    <th scope="row"><img  width="50px" height="50px" src="{{asset('public/admin/upload/hang-hoa/')}}/{{$ct->cthanghoa->hinh_anh}}"></th>
							    
							    <th >{{$ct->cthanghoa->ten_hh}}</th>
							    <th >{{$ct->so_luong_sp}}</th>
							    <th >{{ number_format($ct->cthanghoa->gia_km*$ct->so_luong_sp,0,',','.')}} đ</th>
						    </tr>
						@endforeach

					</tbody>


				</table>

					<div>
						@if($list2->trang_thai == 0 || $list2->trang_thai == 1)
							<a href="#" style="float:right" class="btn btn-danger" > Hủy đơn hàng </a>
						@else
							<button  style="float:right; background-color: #B0C4DE; color: #fff" class="btn btn-light" disabled="" > Hủy đơn hàng </button>
						@endif

						
						<a style="float:right; margin-right: 20px; background-color: #9ACD32; color: #fff" class="btn btn-light">Tổng tiền: {{ number_format($list2->gia_donhang,0,',','.') }} VNĐ</a>

						
					</div>
				
			</div>
			
		</div>
<!-- //privacy -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
@endsection