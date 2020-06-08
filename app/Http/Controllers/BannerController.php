<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
class BannerController extends Controller
{
    public function manage_banner(){
        $banner = banner::orderby('banner_id',desc)->get();
        return view('banner.list.banner')->with(compact('banner'));
    }
}
