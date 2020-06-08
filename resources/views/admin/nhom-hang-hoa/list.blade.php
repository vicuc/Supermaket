@extends('admin.layout')
@section('admin_content') 
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Nhóm hàng hóa</h3>
                                <div class="table-data__tool">

                                    <!-- ///// -->
                                    <div class="table-data__tool-left">
                                    </div>
                                    <!-- /// -->

                                    <div class="table-data__tool-right">
                                        <a href="{{Route('nhh2')}}" class="au-btn au-btn-icon au-btn--blue au-btn--small" >
                                            <i class="zmdi zmdi-plus" ></i>Thêm</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên nhóm hàng hóa</th>
                                                
                                                <th >Thao tác</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          

                                             @foreach($nhomhanghoa as $nhh)
                                            <tr class="tr-shadow">
                                                <td >
                                                    {{$nhh->id}}
                                                </td>

                                                

                                                <td class="desc">{{$nhh->ten_nhom}}</td>
                                                

                                                
                                                <td>
                                                    <div class="table-data-feature"  >
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" >
                                                            <a href="{{route('nhh4',['id' => $nhh->id])}}"><i class="zmdi zmdi-edit"></i></a>
                                                        </button>
                                                        <button style="margin-left: 10px;" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <a href="{{route('nhh6',['id' => $nhh->id])}}"><i class="zmdi zmdi-delete"></i></a>
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