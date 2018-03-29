<?php

namespace App\Http\Controllers;
use App\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
   public  function ViewAll(){
    	$device = Device::with(['city','customer'])->get();
    	$arr=Array('device'=>$device);
    	return view('api.device.all',$arr);
    }


    public function add(Request $request){

    	if($request->isMethod('post')){
    		$newdevice= new Device();
    		$newdevice->name = $request->input('name');
            $newdevice->ip = $request->input('ip');
    		$newdevice->username = $request->input('username');
    		$newdevice->password = $request->input('password');
            $newdevice->city_id = $request->input('city_id');
            $newdevice->customer_id = $request->input('customer_id');
            $newdevice->save();
    		return view('api.device.add'); 
    	}

    }


        public function delete(Request $request){

        if($request->isMethod('post')){
        $id = $request->input('id');
        $device = Device::find($id);
        $device->delete();

        return view('api.device.delete');

        }

    }


     public  function view(Request $request){
        if($request->isMethod('post')){
        $id = $request->input('id');

        $device = Device::with(['city','customer'])->findOrFail($id);
        $arr=Array('device'=>$device);
        return view('api.device.view',$arr);
    }
    return view('api.device.view');
     }


    public  function update(Request $request){
    if($request->isMethod('post')){
        $id = $request->input('id');
        $device = Device::find($id);
        $device->name = $request->input('name');
        $device->username = $request->input('username');
    	$device->password = $request->input('password');
        $device->ip = $request->input('ip');
        $device->city_id = $request->input('city_id');
        $device->customer_id = $request->input('customer_id');
        $device->save();
        return view('api.device.update');
       
    }
     }
}
