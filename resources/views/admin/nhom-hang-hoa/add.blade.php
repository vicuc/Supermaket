@extends('admin.layout')
@section('admin_content')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">


                            <div class="col-lg-12">
                            <form action="{{ route('nhh3')}}" id="form_validation" method="POST" >
                                {{csrf_field() }}
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Nhóm hàng hóa</strong>
                                        <a href="{{Route('nhh1')}}" style="float:right">Quay lại</a>
                                    </div>
                                    <div class="card-body card-block">
                                            <div class="form-group">
                                                <label  class=" form-control-label">Tên nhóm hàng hóa</label>
                                                <input type="text" name="ten" placeholder="Tên nhóm hàng hóa" class="form-control">
                                               
                                            </div>
                                        
                                    </div>
                                    <div class="card-footer">

                                        <button type="submit" class="btn btn-primary btn-sm" style="background-color: #57b846; border-color: #57b846; padding-left: 15px; color: #fff; width: 70px; height: 40px;">
                                            <i class="fa fa-floppy-o"></i> Lưu
                                        </button>

                                        <button style="width: 70px; height: 40px;"  class="btn btn-danger btn-sm">
                                            <i class="fa fa-undo"></i> <a style="color: #fff" href="{{Route('nhh1')}}">Hủy</a>
                                        
                                        </button>
                                </div>
                                </div>
                            </form>


                            </div>


                        </div>
 @endsection