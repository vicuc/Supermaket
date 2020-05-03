<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */


// Route::get('/', function () {
// 	return view('welcome');
// });
Route::get('/1', function () {
	Schema::create('ct_don_hang', function ( $table) {
            $table->increments('id');
            
            $table->integer('gia_donhang');
            $table->integer('so_luong_sp');

            $table->integer('id_donhang')->unsigned()->nullable();
            $table->foreign('id_donhang')
                    ->references('id')
                    ->on('don_hang')
                    ->onDelete('cascade');


            $table->integer('id_hanghoa')->unsigned()->nullable();
            $table->foreign('id_hanghoa')
                    ->references('id')
                    ->on('hang_hoa')
                    ->onDelete('cascade');

        });
});


Route::get('/2', function () {
	Schema::create('tai_khoan', function ( $table) {
            $table->increments('id');
            $table->string('ms_kh')->nullable();
            $table->string('ms_nv')->nullable();
            $table->string('username');
            $table->string('ten_user');

            $table->string('password');
            $table->string('email');
            $table->integer('phone');
            $table->integer('trang_thai')->nullable();
            $table->string('level');


            $table->dateTime('create');
            $table->dateTime('update')->nullable();

        });
});

// tài khoản
Route::post('/tim-kiem','TimkiemController@post_search');
 
Route::post('/dang-ky','TaikhoanController@post_reg');

Route::get('/dang-nhap','TaikhoanController@login_reg')->name('login');

Route::post('/dang-nhap','TaikhoanController@post_lg');

	Route::get('/dang-xuat','TaikhoanController@logout')->name('logout');


Route::group(['prefix'=>'tai-khoan','middleware'=>'Page_login'],function(){

	Route::get('/','TaikhoanController@profile')->name('profile1');


	Route::get('/chinh-sua-thong-tin-{id}','TaikhoanController@edit')->name('edit1');
	Route::post('/chinh-sua-thong-tin-{id}','TaikhoanController@post_edit')->name('edit2');
	Route::get('/don-hang','DonhangController@page_donhang')->name('donhang');
	Route::post('/don-hang','DonhangController@post_donhang')->name('donhang2');
	Route::get('/chi-tiet-don-hang-{id}','DonhangController@page_ct_donhang')->name('ct_donhang');





});


// page
Route::get('/','PageController@home')->name('page1');
Route::get('/trang-chu','PageController@home');

Route::group(['prefix' => 'gio-hang'],function(){
	Route::get('/','GiohangController@showcart');
	Route::get('/them-san-pham-{id}','GiohangController@addCart')->name('addcart');
	Route::get('/cap-nhat-san-pham','GiohangController@update')->name('updatecart');
	Route::get('/xoa-san-pham-{id}','GiohangController@delCart')->name('delcart');

});

Route::group(['prefix'=>'san-pham'],function(){
	Route::get('/','PageController@sanpham2')->name('gg1');
	Route::get('chi-tiet-san-pham-{id}.html','PageController@ct_gd')->name('gg2');

});



Route::group(['prefix'=>'do-gia-dung'],function(){
	Route::get('/','PageController@gia_dung')->name('page1');
	Route::get('chi-tiet-san-pham-{id}.html','PageController@ct_gd')->name('ct1');

});


Route::group(['prefix'=>'rau-cu'],function(){
	Route::get('/','PageController@rau_qua')->name('page2');
	Route::get('chi-tiet-san-pham-{id}.html','PageController@ct_rc')->name('ct2');


});

Route::group(['prefix'=>'trai-cay'],function(){
	Route::get('/','PageController@trai_cay')->name('page3');
	Route::get('chi-tiet-san-pham-{id}.html','PageController@ct_tc')->name('ct3');

});

Route::group(['prefix'=>'nha-bep'],function(){
	Route::get('/','PageController@nha_bep')->name('page4');
	Route::get('chi-tiet-san-pham-{id}.html','PageController@ct_nb')->name('ct4');

});


Route::group(['prefix'=>'nuoc-ep'],function(){
	Route::get('/','PageController@nuoc_ep')->name('page5');
	Route::get('chi-tiet-san-pham-{id}.html','PageController@ct_ne')->name('ct5');

});


Route::group(['prefix'=>'nuoc-ngot'],function(){
	Route::get('/','PageController@nuoc_ngot')->name('page6');
	Route::get('chi-tiet-san-pham-{id}.html','PageController@ct_nn')->name('ct6');

});


Route::group(['prefix'=>'thuc-an-thu-cung'],function(){
	Route::get('/','PageController@thucan')->name('page7');
	Route::get('chi-tiet-san-pham-{id}.html','PageController@ct_ta')->name('ct7');

});


Route::group(['prefix'=>'banh-mi'],function(){
	Route::get('/','PageController@banh_mi')->name('page8');
	Route::get('chi-tiet-san-pham-{id}.html','PageController@ct_bm')->name('ct8');

});








Route::get('/admin@@','AdminController@ad_login');

Route::post('/admin@@','AdminController@post_ad_login')->name('login2');
/// admin

Route::group(['prefix'=>'admin','middleware'=>'Ad_login'],function(){
	Route::get('/','AdminController@home')->name('ad1');


	Route::group(['prefix'=>'user'],function(){
		Route::get('/','UserController@list')->name('us1');
		Route::get('them-user.html','UserController@get_add')->name('us2');

	});

	Route::group(['prefix'=>'danh-sach-hang-hoa'],function(){
		Route::get('/','HanghoaController@list')->name('sp1');
		Route::get('them-hang-hoa','HanghoaController@get_add')->name('sp2');
		Route::post('them-hang-hoa','HanghoaController@post_add')->name('sp3');

		Route::get('sua-hang-hoa-{id}.html','HanghoaController@get_edit');
		Route::post('sua-hang-hoa-{id}.html','HanghoaController@post_edit');

		Route::get('xoa-hang-hoa-{id}.html','HanghoaController@del');

	});

	Route::group(['prefix'=>'danh-sach-nhom-hang-hoa'],function(){
		Route::get('/','NhomsanphamController@list')->name('nhh1');
		Route::get('them-nhom-hang-hoa','NhomsanphamController@get_add')->name('nhh2');

		Route::post('them-nhom-hang-hoa','NhomsanphamController@post_add')->name('nhh3');

		Route::get('sua-nhom-hang-hoa-{id}.html','NhomsanphamController@get_edit');
		Route::post('sua-nhom-hang-hoa-{id}.html','NhomsanphamController@post_edit');

		Route::get('xoa-nhom-hang-hoa-{id}.html','NhomsanphamController@del');




	});

	Route::group(['prefix'=>'don-hang'],function(){
		Route::get('/','DonhangController@donhang_ad')->name('dh1');

		Route::get('/dat-hang-{id}','DonhangController@dat_don')->name('dh2');
		Route::get('/xu-ly-{id}','DonhangController@xu_ly')->name('dh3');

		Route::get('/van-chuyen-{id}','DonhangController@van_chuyen')->name('dh4');
		Route::get('/thanh-cong-{id}','DonhangController@thanh_cong')->name('dh5');
		Route::get('/huy-don-{id}','DonhangController@Cancle')->name('dh6');



		

	});


	Route::group(['prefix'=>'tin-tuc'],function(){
		Route::get('/','TintucController@list')->name('tt1');
		Route::get('them-tin-tuc.html','TintucController@get_add')->name('tt2');

	});

	Route::group(['prefix'=>'khuyen-mai'],function(){
		Route::get('/','KhuyenmaiController@list')->name('km1');
		Route::get('them-khuyen-mai.html','KhuyenmaiController@get_add')->name('km2');

		Route::group(['prefix'=>'voucher'],function(){
			Route::get('/','KhuyenmaiController@list')->name('vc1');
			Route::get('them-them-voucher.html','KhuyenmaiController@get_add')->name('vc2');
		});

	});




});










