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

}
