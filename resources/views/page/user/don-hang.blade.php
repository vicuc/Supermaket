@extends('page.layout')
@section('tieude','Đơn hàng')
@section('page_content')
<!-- products-breadcrumb -->
@section('header_small')
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/trang-chu">Home</a><span>|</span></li>
				<li><a href="{{Route('profile1')}}">Tài khoản</a><span>|</span></li>
				<li>Đơn hàng</li>
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
				<h3>Có {{$list->count()}} đơn hàng của bạn</h3>
				@php
					$stt = 1;
				@endphp
				<table class="table">
					<thead>
					    <tr>
					      <th scope="col">STT</th>
					      <th scope="col">Mã đơn hàng</th>
					      <th scope="col">Trạng thái</th>
					      <th scope="col">Thanh toán</th>
					      	
					      <th scope="col">Ngày đặt</th>
					    </tr>
					</thead>
					<tbody>
						@foreach($list as $dh)
						    <tr>
							    <th scope="row">{{$stt++}}</th>
							    <td>
							      	<a href="{{Route('ct_donhang',['id'=>$dh->id])}}">{{$dh->ma_donhang}}</a>
							    </td>
							    <td>
							    	@if($dh->trang_thai == 0)
							    	
							    		<span class="btn btn-success">{{'Đặt hàng thành công' }}</span>
							    	
							    	@elseif($dh->trang_thai == 1)
							    	
										<span class="btn btn-warning">{{'Đang xử lý'}}</span>
							    	
							    	@elseif($dh->trang_thai == 2)
							    	
										<span style="background-color: #7B68EE; color: #fff" class="btn btn-light">{{'Đang vận chuyển'}}</span>
							    	
							    	@elseif($dh->trang_thai == 3)
							    	
										<span class="btn btn-info">{{'Thành công'}}</span>

									@elseif($dh->trang_thai == 4)
							    	
										<span style="background-color: 	#F08080; color: #fff" class="btn btn-light">{{'Đã Hủy'}}</span>
							    	
							    	@endif

							    </td>
							    <td style="color: #999">Thanh toán khi nhận hàng</td>

							    <td>{{ date("d-m-Y || H:i A",strtotime($dh->ngay_dat)) }}</td>
						    </tr>
						@endforeach
					   
					</tbody>
				</table>
				
			</div>
			
		</div>
<!-- //privacy -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
@endsection