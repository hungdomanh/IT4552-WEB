<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use function get request url
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;

class ProgramController extends Controller
{
    //
	public function getPrograms($paging) {
		// TODO
		return view('pages.programs');
	}
	
	public function getProgram($programId) {
		// TODO
		return view('pages.program');
	}
	
	public function postSearch() {
		// TODO

	}   

	public function getProgramAllContent() {
		// TODO

	}
	
	public function getProgramsPaging() {
		// TODO
		return view('pages.login');
	}
	 
}
