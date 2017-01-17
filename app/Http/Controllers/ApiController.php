<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function all(){

    	$data = DB::table('notes')->get();
    	return $data;
    }

    public function add(Request $request){
    	$data = DB::table('notes')->insertGetId($request->all());
    	$getdata = DB::table('notes')
                ->where('id', $data)
                ->get();
    	$jsonReturnVal = substr_replace(substr($getdata, 1), "", -1);
    	return response($jsonReturnVal, 201);
    }

    public function remove($id){
        DB::table('notes')->where('id', $id)->delete();
        return response("", 204);
    }

}
