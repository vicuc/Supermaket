@extends('admin.layout')
@section('admin_content')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">


                            <div class="col-lg-12">
                             <form action="{{route('sp5',['id' => $hanghoa->id])}}" id="form_validation" method="POST" enctype="multipart/form-data">
                                {{csrf_field() }}
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Sửa hàng hóa</strong>
                                        <a href="{{Route('sp1')}}" style="float:right">Quay lại</a>
                                    </div>
                                    <div class="card-body card-block">

                                            <div class="form-group">
                                                <label  class=" form-control-label">Chọn nhóm hàng hóa</label>
                                                <select name="nhomhanghoa"  class="form-control">

                                                    @foreach($nhomhanghoa as $nhh)
                                                        <option

                                                            @if($hanghoa->ma_nhom == $nhh->id)
                                                                {{"selected"}}
                                                            @endif

                                                             value="{{$nhh->id}}">{{$nhh->ten_nhom}}
                                                     </option>
                                                    @endforeach 
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label  class=" form-control-label">Tên hàng hóa</label>
                                                <input type="text" name="ten" value ="{{$hanghoa->ten_hh}}" class="form-control">
                                               
                                            </div>

                                            <div class="form-group">
                                                <label  class=" form-control-label">Mô tả</label>
                                                <textarea id="demo" value="{{$hanghoa->mo_ta}}" name="mota"  class="form-control ckeditor">{{$hanghoa->mo_ta}}</textarea>
                                                
                                            </div>



                                            <div class="form-group">
                                                <label  class=" form-control-label">Giá gốc</label>
                                                <input type="text" name="giagoc" value="{{$hanghoa->gia_hh}}" class="form-control">
                                               
                                            </div>

                                            <div class="form-group">
                                                <label  class=" form-control-label">Giá khuyến mãi</label>
                                                <input type="text" name="khuyenmai" value="{{$hanghoa->gia_km}}" class="form-control">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label  class=" form-control-label">Số lượng</label>
                                                <input type="text" name="soluong" value="{{$hanghoa->soluong_hang}}"  class="form-control">
                                                
                                            </div>

                                            <div class="form-group">
                                                <label  class=" form-control-label">Trọng lượng</label>
                                                <input type="text" name="trongluong" value="{{$hanghoa->trong_luong}}"  class="form-control">
                                                
                                            </div>


                                             @if($hanghoa->hinh_anh)
                                                <div class="input-group">
                                                    <img  width="180px" height="180px" src="{{asset('public/admin/upload/hang-hoa/')}}/{{$hanghoa->hinh_anh}}">
                                                </div>
                                                <br>
                                                @endif
                                            
                                            <div class="input-group">

                                                <button class="btn btn-primary" style="padding: 0,0,0,0;">
                                                        <i class="fas fa-picture-o"></i>
                                                         Hình ảnh
                                                    </button>

                                               
                                                
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