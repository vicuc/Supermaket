@extends('page.layout')
@section('tieude','Giỏ hàng')
@section('page_content')
<!-- products-breadcrumb -->
@section('header_small')
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">Home</a><span>|</span></li>
				<li>Giỏ hàng</li>
			</ul>
		</div>
	</div>
@endsection

	<div class="banner">
		<div class="w3l_banner_nav_right">
		<div class="privacy about">
			<h3>Giỏ hàng của bạn</span></h3>
			
			@if(Cart::count()>= 1)
	       		<div class="checkout-right">
					<h4 >Giỏ hàng đang có: 
						<span><b style="color: #03a9f4">{{Cart::count()}}</b> Sản phẩm</span>
						<a style="float:right" class="btn btn-danger" href="{{Route('delcart',['id' => 'all'])}}"><i class="fa fa-trash-o"></i>&nbsp Xóa hết</a>
					</h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>STT</th>	
								<th>Sản phẩm</th>
								<th>Số lượng</th>
								<th>Tên sản phẩm</th>
							
								<th>Đơn giá</th>

								<th>Xóa</th>
							</tr>
						</thead>
						<tbody >
							@php
								$stt = 1;
							@endphp
							@foreach($cart as $sp)
							<tr class="rem1" align="center">
								<td class="invert">{{$stt++}}</td>
								<td class="invert-image">
									<a href="single.html"><img src="{{asset('public/admin/upload/hang-hoa/')}}/{{$sp->options->img}}" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<input type="hidden" value="{{$sp->rowId}}"
                                       id="rowID{{$sp->id}}"/>
											<div class="cart-qty">
		                                        
												<input class="qty-fill" style="width: 20%" type="number"  value="{{$sp->qty}}" onchange="updatecart(this.value,'{{$sp->rowId}}')">

		                                     </div>
										</div>
									</div>
								</td>
								<td class="invert">{{$sp->name}}</td>

								
								<td class="invert">{{ number_format($sp->price,0,',','.') }} đ</td>
								

								
								<td class="invert">
									<a href="{{Route('delcart',['id' => $sp->rowId])}}"><i class="fa fa-trash-o"></i></a>

								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>

				<div class="checkout-left">	
					<div class="col-md-5 checkout-left-basket">
						<table class="table" >
							<tr >
								<th style="width: 40%; ">Sản phẩm</th>
								<th style="width: 30%; " >Số lượng</th>
								<th style="width: 30%;">Thành tiền</th>
								
							</tr>
							
							@foreach($cart as $sp)
								<tr >

									<td>{{$sp->name}}</td> 
									<td >{{$sp->qty}}</td> 
									<td>{{ number_format($sp->price*$sp->qty,0,',','.') }} đ </td>

									
									

								</tr>
							@endforeach
						</table>
						<hr>
						<div>
							<b style="color:#999">Tổng tiền:</b> 
							<span style="margin-left: 55%; color:blue;">{{$total}} đồng</span>
						</div>
							<br>
						<a class="btn btn-success" href="{{Route('gg1')}}" >Tiếp tục mua hàng</a>
					</div>

					<div class="col-md-7 address_form_agile">
					    <h4>Thông tin giao hàng</h4>
					    <form action="{{Route('donhang2')}}" method="post" class="creditly-card-form agileinfo_form">
					    	{{ csrf_field() }}
					        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
					            <div class="information-wrapper">
					                <div class="first-row form-group">
					                    <div class="controls">
					                        <label class="control-label">Họ tên: </label>
					                        
					                        	<input class="billing-address-name form-control" type="text" 
					                        	@if(Auth::check())
					                        	value="{{Auth::user()->ten_user}}"
					                        	@endif name="name" >
					                        

					                    </div>
					                    <div class="w3_agileits_card_number_grids">
					                        <div class="w3_agileits_card_number_grid_left">
					                            <div class="controls">
					                                <label class="control-label">Số điện thoại:</label>
					                                
					                                	<input name="phone_order" class="form-control" type="text" @if(Auth::check())
					                                	value="0{{Auth::user()->phone}}"
					                                	@endif placeholder="vd: 0762999994">
					                                
					                               		
					                                
					                            </div>
					                        </div>
					                        <div class="w3_agileits_card_number_grid_right">
					                            <div class="controls">
					                                <label class="control-label">Địa chỉ giao hàng: </label>
					                                <textarea name="diachi" class="form-control" type="text"  placeholder="vd: Đại học cần thơ" ></textarea>
					                            </div>
					                        </div>
					                        <div class="clear"> </div>
					                    </div>
					                    <div class="controls">
					                        <label class="control-label">Tỉnh / Thành phố: </label>
					                        <input name="city" class="form-control" type="text" placeholder="vd: Cần Thơ">
					                    </div>
					                    <div class="controls">
					                        <label class="control-label">Phương thức thanh toán: </label>
					                        <input class="form-control" placeholder="Thanh toán khi nhận hàng" disabled="">
					                    </div>

					                    


					                </div>
					                @if(Auth::check())
					                <button class="submit check_out">Đặt hàng</button>
					                @else
					                <button class="submit check_out">
					                	<a style="color: #fff" href="{{Route('login')}}">Mời đăng ký tài khoản</a>
					                </button>
					               	@endif

					            </div>
					        </section>
					    </form>
					</div>

					<div class="clearfix"> </div>
				</div>
			@else
		
				<img style="margin-left: 20%; margin-top: 4%;" src="{{asset('public/page/cart.jpeg')}}">
		
			@endif
		</div>

	</div>
		

	<div class="clearfix"></div>

</div>


<script>
  function updatecart(qty, rowId){
  	$.get(
  		'{{Route('updatecart')}}',
  		{qty:qty,rowId:rowId},
  		function(){
  			location.reload();
  		}
  		);
  }
    
</script>
	
<!-- //banner -->

<!--quantity-->




@endsection