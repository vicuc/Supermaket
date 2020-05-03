@extends('admin.layout')
@section('admin_content') 
    <div class="col-lg-12">
        <!-- USER DATA-->
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>user data</h3>
            <div class="filters m-b-45">
                <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                    <select class="js-select2" name="property">
                        <option selected="selected">All Properties</option>
                        <option value="">Products</option>
                        <option value="">Services</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                    <select class="js-select2 au-select-dark" name="time">
                        <option selected="selected">All Time</option>
                        <option value="">By Month</option>
                        <option value="">By Day</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <a href="{{Route('us2')}}" class="au-btn au-btn-icon au-btn--blue au-btn--small" style="float:right" >
                    <i class="zmdi zmdi-plus" ></i>add user</button>
                </a>
            </div>
            <div class="table-responsive table-data">
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>

                            <td>Thông tin</td>

                            <td>Quyền</td>
                            <td>Action</td>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt=1;
                        @endphp
                        <tr>
                            <td style="padding-top: 45px;">
                                {{$stt++}}
                            </td>
                            <td >
                                <div class="table-data__info">
                                    <h6>Bánh Bao</h6>
                                    <span>
                                        <a href="#" style="margin-top: 10px;">mrbanhbao</a> <br>
                                        <a href="#" >banhbao1nganmotcai@gmail.com</a>
                                    </span>
                                    
                                </div>
                            </td>
                            <td>
                                <span style="margin-top: 20px;" class="role admin">admin</span>
                            </td>
                            <td >
                                <div class="rs-select2--trans rs-select2--sm" style="margin-top: 20px;">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">Thao tác</option>
                                        <option value="">Sửa</option>
                                        <option value="">Xóa</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 45px;">
                                {{$stt++}}
                            </td>
                            <td >
                                <div class="table-data__info">
                                    <h6>Bánh Bao</h6>
                                    <span>
                                        <a href="#" style="margin-top: 10px;">mrbanhbao</a> <br>
                                        <a href="#" >banhbao1nganmotcai@gmail.com</a>
                                    </span>
                                    
                                </div>
                            </td>
                            <td>
                                <span style="margin-top: 20px;" class="role user">Nhân viên</span>
                            </td>
                            <td >
                                <div class="rs-select2--trans rs-select2--sm" style="margin-top: 20px;">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">Thao tác</option>
                                        <option value="">Sửa</option>
                                        <option value="">Xóa</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding-top: 45px;">
                                {{$stt++}}
                            </td>
                            <td >
                                <div class="table-data__info">
                                    <h6>Bánh Bao</h6>
                                    <span>
                                        <a href="#" style="margin-top: 10px;">mrbanhbao</a> <br>
                                        <a href="#" >banhbao1nganmotcai@gmail.com</a>
                                    </span>
                                    
                                </div>
                            </td>
                            <td>
                                <span style="margin-top: 20px;" class="role member">Member</span>
                            </td>
                            <td >
                                <div class="rs-select2--trans rs-select2--sm" style="margin-top: 20px;">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">Thao tác</option>
                                        <option value="">Sửa</option>
                                        <option value="">Xóa</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>

        </div>
        <!-- END USER DATA-->
    </div>
@endsection