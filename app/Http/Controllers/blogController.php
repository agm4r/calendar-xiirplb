<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class blogController extends Controller
{
    public function home(){
    	// Time Zone
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

		// Create prev & next month link 
		$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
		$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

		// Number of days in the month
		$day_count = date('t', $timestamp);
		 
		// 0:Sun 1:Mon 2:Tue ...
		$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));


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

		return view('home', ['weeks' => $weeks, 'prev' => $prev, 'next' => $next, 'html_title' => $html_title, 'ym' => $ym]);
	}

	public function profile(){
    	return view('profile');
	}
	public function contact(){
    	return view('contact');
	}
}