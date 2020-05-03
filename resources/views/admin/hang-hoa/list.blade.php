@extends('admin.layout')
@section('admin_content') 
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Hàng hóa</h3>
                                <div class="table-data__tool">

                                    <!-- ///// -->
                                    <div class="table-data__tool-left">
                                    </div>
                                    <!-- /// -->

                                    <div class="table-data__tool-right">
                                        <a href="{{Route('sp2')}}" class="au-btn au-btn-icon au-btn--blue au-btn--small" >
                                            <i class="zmdi zmdi-plus" ></i>add item</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Hình Ảnh</th>
                                                <th>Tên hàng hóa</th>
                                                <th>Nhóm hàng hóa</th>
                                                <th>Gía bán</th>
                                                <th>Khuyến mãi</th>
                                                <th>Số lượng</th>
                                                <th >Thao tác</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $stt=1;
                                            @endphp
                                            @foreach($hanghoa as $hh)
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td >
                                                    {{$stt++}}
                                                </td>

                                                 @if($hh->hinh_anh)
                                                <td>
                                                    <img  width="90px" height="90px" src="{{asset('public/admin/upload/hang-hoa/')}}/{{$hh->hinh_anh}}">
                                                </td>
                                                @else
                                                <td>
                                                    <p>No image</p>
                                                </td>
                                                @endif


                                                <td style="padding-top:2%" > {{$hh->ten_hh}}</td>

                                                <td class="desc">{{$hh->hhnhomhanghoa->ten_nhom}}</td>
                                                
                                                <td>{{$hh->gia_hh}}</td>

                                                <td>{{$hh->gia_km}}</td>

                                                <td>{{$hh->soluong_hang}}</td>

                                                
                                              

                                                <td>
                                                    <div class="table-data-feature"  >
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" >
                                                            <a href="/admin/danh-sach-hang-hoa/sua-hang-hoa-{{$hh->id}}.html"><i class="zmdi zmdi-edit"></i></a>
                                                        </button>
                                                        <button style="margin-left: 10px;" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <a href="/admin/danh-sach-hang-hoa/xoa-hang-hoa-{{$hh->id}}.html"><i class="zmdi zmdi-delete"></i></a>
                                                        </button>
                                                        
                                                </td>
                                            </tr>

                                            
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>

@endsection