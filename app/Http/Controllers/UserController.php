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

class UserController extends Controller
{
	public function getProfile() {
		// TODO
		$user = Auth::user();
		return view('pages.profile')->with('user',$user);
	}
	
	public function getMyPage() {
		// TODO
		$user = Auth::user();
		$following_programs = DB::table('users')
		->where('users.id', $user->id)
		->leftjoin('my_programs', 'users.id', '=', 'my_programs.user_id')
		->leftjoin('programs', 'my_programs.program_id', '=', 'programs.id')
		->paginate(6);
		return view('pages.my-page')->with('programs', $following_programs);
	}
	
	public function postUpdate(Request $request) {
		// TODO
		$user = Auth::user();
		$user->fullname = $request->fullname;
		$user->purpose = $request->purpose;
		
		$user->birthday = $request->birthday;
		$user->weight = $request->weight;
		$user->height = $request->height;
		$user->job = $request->job;
		$user->address = $request->address;
		$user->save();
		return redirect()->back()->with('alert', 'Update profile successfully.');
	}
}
