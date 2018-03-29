<?php

namespace App\Http\Controllers;
use App\Customer;


use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public  function ViewAll(){
    	$customer = Customer::all();
    	$arr=Array('customer'=>$customer);
    	return view('api.customer.all',$arr);
    }


    public function add(Request $request){

    	if($request->isMethod('post')){
    		$newcustomer= new Customer();
    		$newcustomer->name = $request->input('name');
            $newcustomer->save();
    		return view('api.customer.add'); 
    	}

    }


        public function delete(Request $request){

        if($request->isMethod('post')){
        $id = $request->input('id');
        $customer = Customer::find($id);
        $customer->delete();

        return view('api.customer.delete');

        }

    }


     public  function view(Request $request){
         if($request->isMethod('post')){
        $id = $request->input('id');
        $customer = Customer::find($id);
        $arr=Array('customer'=>$customer);
        return view('api.customer.view',$arr);
    }
    return view('api.customer.view');
     }


    public  function update(Request $request){
    if($request->isMethod('post')){
        $id = $request->input('id');
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->save();
        return view('api.customer.update');
       
    }
     }


}
