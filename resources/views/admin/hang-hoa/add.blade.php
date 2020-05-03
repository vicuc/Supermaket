@extends('admin.layout')
@section('admin_content')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">


                            <div class="col-lg-12">
                             <form action="/admin/danh-sach-hang-hoa/them-hang-hoa" id="form_validation" method="POST" enctype="multipart/form-data">
                                {{csrf_field() }}
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Hàng hóa</strong>
                                        <a href="{{Route('sp1')}}" style="float:right">Quay lại</a>
                                    </div>
                                    <div class="card-body card-block">

                                            <div class="form-group">
                                                <label  class=" form-control-label">Chọn nhóm hàng hóa</label>
                                                <select name="nhomhanghoa"  class="form-control">

                                                    @foreach($nhomhanghoa as $nhh)
                                                        <option value="{{$nhh->id}}">{{$nhh->ten_nhom}}</option>
                                                    @endforeach 
                                                </select>
                                            </div>

                                            

                                            
                                            

                                            
                                        

                                            <div class="form-group">
                                                <label  class=" form-control-label">Tên hàng hóa</label>
                                                <input type="text" name="ten" placeholder="Tên hàng hóa" class="form-control">
                                               
                                            </div>

                                            <div class="form-group">
                                                <label  class=" form-control-label">Mô tả</label>
                                                <textarea id="demo"  name="mota"  class="form-control "></textarea>
                                                
                                            </div>



                                            <div class="form-group">
                                                <label  class=" form-control-label">Giá gốc</label>
                                                <input type="text" name="giagoc" placeholder="Giá gốc.." class="form-control">
                                               
                                            </div>

                                            <div class="form-group">
                                                <label  class=" form-control-label">Giá khuyến mãi</label>
                                                <input type="text" name="khuyenmai" placeholder="Giá khuyến mãi.." class="form-control">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label  class=" form-control-label">Số lượng</label>
                                                <input type="text" name="soluong" placeholder="Nhập số lượng" class="form-control">
                                                
                                            </div>

                                            <div class="form-group">
                                                <label  class=" form-control-label">Trọng lượng</label>
                                                <input type="text" name="trongluong" placeholder="Nhập trọng lượng" class="form-control">
                                                
                                            </div>



                                            
                                            <div class="input-group">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-primary" style="padding: 0,0,0,0;">
                                                        <i class="fas fa-picture-o"></i>
                                                         Hình ảnh
                                                    </button>
                                                </div>
                                                <input type="file"  name="image"  class="form-control">
                                            </div>

                                        
                                    </div>
                                    <div class="card-footer">

                                        <button type="submit" class="btn btn-primary btn-sm" style="background-color: #57b846; border-color: #57b846; padding-left: 15px; color: #fff; width: 70px; height: 40px;">
                                            <i class="fa fa-floppy-o"></i> Lưu
                                        </button>

                                        <button style="width: 70px; height: 40px;"  class="btn btn-danger btn-sm">
                                            <i class="fa fa-undo"></i> <a style="color: #fff" href="{{Route('sp1')}}">Hủy</a>
                                        
                                        </button>
                                </div>
                                </div>
                            </form>


                            </div>


                        </div>

 @endsection