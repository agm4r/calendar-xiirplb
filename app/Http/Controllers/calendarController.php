<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class calendarController extends Controller
{
    public function index(){
    	// Set your timezone
		date_default_timezone_set('Asia/Jakarta');

		// Get prev & next month
		if (isset($_GET['ym'])) {
		    $ym = $_GET['ym'];
		} else {
		    // This month
		    $ym = date('Y-m');
		}

		// Check format
		$timestamp = strtotime($ym . '-01');
		if ($timestamp === false) {
		    $ym = date('Y-m');
		    $timestamp = strtotime($ym . '-01');
		}

		// Today
		$today = date('Y-m-j', time());

		// For H3 title
		$html_title = date('Y  M', $timestamp);

		// Create prev & next month link     mktime(hour,minute,second,month,day,year)
		$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
		$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
		// You can also use strtotime!
		// $prev = date('Y-m', strtotime('-1 month', $timestamp));
		// $next = date('Y-m', strtotime('+1 month', $timestamp));

		// Number of days in the month
		$day_count = date('t', $timestamp);
		 
		// 0:Sun 1:Mon 2:Tue ...
		$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
		//$str = date('w', $timestamp);


		// Create Calendar!!
		$weeks = array();
		$week = '';

		// Add empty cell
		$week .= str_repeat('<td></td>', $str);

		for ( $day = 1; $day <= $day_count; $day++, $str++) {
		     
		    $date = $ym . '-' . $day;
		     
		    if ($today == $date) {
		        $week .= '<td class="today"><a class="text-dark" href="/blog/events/' . $date . '"> ' . $day;
		    } else {
		        $week .= '<td><a class="text-dark" href="/blog/events/' . $date . '"> ' . $day; 
		    }
		    $week .= '</a></td>';
		     
		    // End of the week OR End of the month
		    if ($str % 7 == 6 || $day == $day_count) {

		        if ($day == $day_count) {
		            // Add empty cell
		            $week .= str_repeat('<td></td>', 6 - ($str % 7));
		        }

		        $weeks[] = '<tr>' . $week . '</tr>';

		        // Prepare for new week
		        $week = '';
		    }

		}

		return view('calendar', ['weeks' => $weeks, 'prev' => $prev, 'next' => $next, 'html_title' => $html_title, 'ym' => $ym]);
	}

	public function events($date)
	{
		// mengambil data events berdasarkan date 
		$i = 1;
		$event = DB::table('events')->where('date',$date)->get();

		// passing data events yang didapat ke view events.blade.php
		return view('events', ['event' => $event, 'date' => $date, 'i' => $i]);
	 
	}

	public function tambah($date)
	{
		return view('calendar/tambah', ['date' => $date]);

	}

	public function insert(Request $request){


		DB::table('events')->insert([
			'title' => $request->title,
			'date' => $request->date,
			'time' => $request->time,
			'Notes' => $request->notes,
			'NISN' => $request->NISN
		]);
		return redirect('blog/events/' . $request->date);
	 
	}

	public function edit($id)
	{
		// mengambil data murid berdasarkan nisn yang dipilih
		$events = DB::table('events')->where('id',$id)->get();
		// passing data murid yang didapat ke view update.blade.php
		return view('calendar/update',['events' => $events]);
	 
	}

	public function update(Request $request)
	{
		// edit data murid
		DB::table('events')->where('id', $request->id)->update([
			'title' => $request->title,
			'date' => $request->date,
			'time' => $request->time,
			'Notes' => $request->notes,
			'NISN' => $request->NISN
		]);
		// alihkan halaman ke halaman murid
		return redirect('/blog/events/' . $request->date);
	}

	public function delete($id, $dateDelete)
	{
		DB::table('events')->where('id', $id)->delete();
			
		return redirect('blog/events/' . $dateDelete);
	}

}