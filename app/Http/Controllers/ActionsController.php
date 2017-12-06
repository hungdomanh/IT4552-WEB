<?php

namespace App\Http\Controllers;
use App\MyProgram;
use App\Program;
use App\User;
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

class ActionsController extends Controller
{
    //
	public function getPrograms($userId) {
		// TODO
		
	}
	
	public function postProgramToUser($programId, $userId) {
		// TODO
		$relation = Myprogram::where([
			['program_id', '=', $programId],
			['user_id', '=', $userId],
			])->first();

		if ($relation == null) {
			$relation = new MyProgram;
			$relation->program_id = $programId;
			$relation->user_id = $userId;
			$relation->save();
			return redirect()->back()->with('alert', 'Participate successfully');
		} else {
			$relation->delete();
			return redirect()->back()->with('alert', 'Cancel participating successfully');
		}
	}
}
