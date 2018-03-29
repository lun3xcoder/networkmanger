<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Customer;
use App\Device;

class InfoController extends Controller
{
    public function ALLinfo(){

    $info_d= Device::count();
    $info_c= City::count();
    $info_cu= Customer::count();
    $arr=Array('info_d'=>$info_d,'info_c'=>$info_c,'info_cu'=>$info_cu);
    return view('api.info',$arr);

    }
}
