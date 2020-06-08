@extends('admin.layout')
@section('admin_content') 
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Đơn Hàng</h3>
                                <div class="table-data__tool">

                                    <!-- ///// -->
                                    <div class="table-data__tool-left">
                                    </div>
                                    <!-- /// -->

                                    
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Mã đơn hàng</th>
                                                <th>Người đặt đơn</th>
                                                <th>Trạng thái</th>

                                                <th>Ngày đặt</th>
                                                <th >Tình trạng</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          

                                             @foreach($donhang as $nhh)
                                            <tr class="tr-shadow">
                                                <td >
                                                    {{$nhh->id}}
                                                </td>

                                                <td class="desc">{{$nhh->ma_donhang}}</td>


                                                <td >
                                                    {{$nhh->userdh->ten_user}}
                                                </td>

                                                <td >
                                                    @if($nhh->trang_thai == 0)
                                    
                            <a  style="float:right; margin-right: 20px;">{{'Đặt hàng thành công' }}</a>
                        
                        @elseif($nhh->trang_thai == 1)
                        
                            <a style="float:right; margin-right: 20px;" >{{'Đang xử lý'}}</a>
                        
                        @elseif($nhh->trang_thai == 2)
                        
                            <a style="background-color: #7B68EE; color: #fff; float:right; margin-right: 20px;" >{{'Đang vận chuyển'}}</a>
                        
                        @elseif($nhh->trang_thai == 3)
                        
                            <a style="float:right; margin-right: 20px;" >{{'Thành công'}}</a>

                        @elseif($nhh->trang_thai == 4)
                        
                            <a style="background-color: #F08080; color: #fff; float:right; margin-right: 20px;" >{{'Đã Hủy'}}</a>
                        @endif
                        
                                                </td>

                                                <td >
                                                    {{ date("d-m-Y || H:i A",strtotime($nhh->ngay_dat)) }}
                                                </td>

                                                

                                                

                                                
                                                <td>
                                                    <div class="dropdown">
                                                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Duyệt đơn hàng
                                                          </button>
                                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="{{Route('dh2',['id' => $nhh->id])}}">Đặt hàng </a>
                                                            <a class="dropdown-item" href="{{Route('dh3',['id' => $nhh->id])}}">Xử lý</a>
                                                            <a class="dropdown-item" href="{{Route('dh4',['id' => $nhh->id])}}">Vận chuyển</a>
                                                            <a class="dropdown-item" href="{{Route('dh5',['id' => $nhh->id])}}">Thành công</a>
                                                            <a class="dropdown-item" href="{{Route('dh6',['id' => $nhh->id])}}">Đơn hủy</a>


                                                          </div>
                                                        </div>
                                                        
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