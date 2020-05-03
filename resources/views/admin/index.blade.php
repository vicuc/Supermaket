@extends('admin.layout')
@section('admin_content')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Tổng quát</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div  class="col-sm-6 col-lg-3">
                                <div style="padding-bottom: 20%;" class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div style="margin-top: 20px;" class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div  class="text">
                                                <h2>{{$user}}</h2>
                                                <span>Members</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div style="padding-bottom: 20%;" class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div  style="margin-top: 20px;" class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$hanghoa}}</h2>
                                                <span>Sản phẩm</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div style="padding-bottom: 20%;" class="overview-item overview-item--c3">
                                    <div  class="overview__inner">
                                        <div style="margin-top: 20px;" class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$donhang}}</h2>
                                                <span>Đơn hàng</span>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div style="padding-bottom: 20%;" class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div style="margin-top: 20px;" class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{number_format($tongtien,0,',','.') }} VNĐ</h2>
                                                <span>Tổng tiền</span>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                      
                        
@endsection