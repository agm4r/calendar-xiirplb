<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class tugas5Controller extends Controller
{
	public function welcome(){
		return view('welcome');
	}

	public function biodata(){
    	return view('biodata');
	}
}