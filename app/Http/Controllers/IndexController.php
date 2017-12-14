<?php

namespace App\Http\Controllers;
use App\MyProgram;
use App\Program;
use App\User;
use DB;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function getHome() {
    	$trendPrograms = Program::all()->random(6);
    	
    	return view('pages.home')->with('trendPrograms', $trendPrograms);
    }
}
