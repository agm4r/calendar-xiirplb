<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class BelajarController extends Controller
{
    public function index(){
    	$email = 'agmarputra@gmail.com';
    	return view('biodata', ['email' => $email]);
	}
}