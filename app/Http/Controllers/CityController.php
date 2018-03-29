<?php

namespace App\Http\Controllers;
use App\City;


use Illuminate\Http\Request;

class CityController extends Controller
{
    public  function ViewAll(){
    	$city = City::all();
    	$arr=Array('city'=>$city);
    	return view('api.city.all',$arr);
    }


    public function add(Request $request){

    	if($request->isMethod('post')){
    		$newcity= new City();
    		$newcity->name = $request->input('name');
    		$newcity->code = $request->input('code');
            $newcity->save();
    		return view('api.city.add'); 
    	}

    }


        public function delete(Request $request){

        if($request->isMethod('post')){
        $id = $request->input('id');
        $city = City::find($id);
        $city->delete();

        return view('api.city.delete');

        }

    }


     public  function view(Request $request){
         if($request->isMethod('post')){
        $id = $request->input('id');
        $city = City::find($id);
        $arr=Array('city'=>$city);
        return view('api.city.view',$arr);
    }
    return view('api.city.view');
     }


    public  function update(Request $request){
    if($request->isMethod('post')){
        $id = $request->input('id');
        $city = City::find($id);
        $city->name = $request->input('name');
        $city->code = $request->input('code');
        $city->save();
        return view('api.city.update');
       
    }
     }


}
