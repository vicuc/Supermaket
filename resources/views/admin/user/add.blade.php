@extends('admin.layout')
@section('admin_content')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">


                            <div class="col-lg-12">
                            <form action="" method="post" class="">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Sản phẩm</strong>
                                        <a href="{{Route('sp1')}}" style="float:right">Quay lại</a>
                                    </div>
                                    <div class="card-body card-block">

                                            

                                            
                                            <div class="form-group">
                                                <label  class=" form-control-label">Phân quyền</label>
                                                <select name="select" id="select" class="form-control">
                                                    <option value="0">Chọn quyền</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                            
                                            
                                            
                                        
                                            <div class="row">
                                                

                                                <div class="form-group col-lg-6">
                                                    <label  class=" form-control-label">Email</label>
                                                    <input type="email" name="nf-email" placeholder="nguyenvana@gmail.com" class="form-control">
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label  class=" form-control-label">Mật khẩu</label>
                                                    <input type="password" name="nf-email" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label  class=" form-control-label">Họ tên</label>
                                                <input type="text" name="nf-email" placeholder="Nguyễn Văn A.." class="form-control">
                                               
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label  class=" form-control-label">Phone</label>
                                                <input type="text" name="nf-email" placeholder="076299994" class="form-control">
                                               
                                            </div>
                            
                                            
                                        </div>

                                            <div class="form-group">
                                                <label  class=" form-control-label">Địa chỉ</label>
                                                <textarea  name=""   name="nf-password"  class="form-control "></textarea>
                                                
                                            </div>


                                            

   



                                            
                                                    <!-- <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary" style="padding: 0,0,0,0;">
                                                                <i class="fas fa-picture-o"></i>
                                                                 Hình ảnh
                                                            </button>
                                                        </div>
                                                        <input type="file"  name="input1-group2"  class="form-control">
                                                    </div> -->

                                        
                                    </div>
                                    <div class="card-footer">

                                        <button type="submit" class="btn btn-primary btn-sm" style="background-color: #57b846; border-color: #57b846; padding-left: 15px; color: #fff; width: 70px; height: 40px;">
                                            <i class="fa fa-floppy-o"></i> Lưu
                                        </button>

                                        <button style="width: 70px; height: 40px;"  class="btn btn-danger btn-sm">
                                            <i class="fa fa-undo"></i> <a style="color: #fff" href="{{Route('us1')}}">Hủy</a>
                                        
                                        </button>
                                </div>
                            </form>


                            </div>


                        </div>
 @endsection