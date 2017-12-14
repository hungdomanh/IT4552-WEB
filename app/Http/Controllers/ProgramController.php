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

	public function getProgramsSuggest() {
		// TODO
		$user = Auth::user();
		if (!$user->height || !$user->weight) {
			return redirect('profile')->with('alert', 'Update height & weight');
		}
		$userId = $user->id;
		$birthdayYear =  date('Y', strtotime($user->birthday));
		$yearOld = date("Y")-$birthdayYear;
		$height = $user->height;
		$weight = $user->weight;
		
		if ($yearOld <= 40 && $weight >= $height-90) { // level 3
			$suggestProgram = Program::where('level', 3)->paginate(6);
		} elseif ($yearOld > 50) { // level 1
			$suggestProgram = Program::where('level', 1)->paginate(6);
		} else { // level 2
			$suggestProgram = Program::where('level', 2)->paginate(6);
		}

		return view('pages.my-page')->with('programs', $suggestProgram);
	}
	

}
