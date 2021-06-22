<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ExportController extends Controller
{
    public function excel()
    {

		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data Acara XII RPL B.xls");


		$i = 1;
		$event = DB::table('events')
				->join('users', 'events.id_user', '=', 'users.id')
				->get();

		return view('events_excel', ['event' => $event, 'i' => $i]);


        // return redirect('calendar');
    }
}
