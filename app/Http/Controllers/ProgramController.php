<?php

namespace App\Http\Controllers;
use App\MyProgram;
use App\Program;
use App\User;
use App\Action;
use DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
// use function get request url
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;

class ProgramController extends Controller
{
    //
	public function getPrograms() {
		// TODO
		$programs = Program::paginate(5);
		// return $programs; 
		return view('pages.programs')->with('programs', $programs);
	}

	public function getSearch() {
		// TODO
		return view('pages.search');
	}
	
	public function getProgram($programId) {
		// TODO
		$program = Program::find($programId);
		$actions = Action::where('program_id', $programId)->get();

		$isMyProgram = false;

		if (Auth::check()) {
			$user = Auth::user();
			$userId = $user->id;
			$getMyProgram = MyProgram::where('user_id', $userId)
			->where('program_id', $programId)
			->get();

			if ($getMyProgram->count()) {
				$isMyProgram = true;
			} else {
				$isMyProgram = false;
			}
		}

		return view('pages.program')->with([
			'program'=> $program,
			'isMyProgram'=>$isMyProgram,
			'actions'=>$actions
			]);
	}
	
	public function postSearch(Request $request) {
		// TODO
		$key = $request->search;  // Program with programs/instructor
		$programs = Program::where('instructor','like','%'.$key.'%')->paginate(6);

		return view('pages.programs',[
			'programs' => $programs,
			'key' => $key 
			]);
	}   

	public function getProgramAllContent() {
		// TODO

	}
	
	public function getProgramsPaging() {
		// TODO
		// return view('pages.login');
	}

}
