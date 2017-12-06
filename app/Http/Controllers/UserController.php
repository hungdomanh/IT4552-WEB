<?php

namespace App\Http\Controllers;
use App\MyProgram;
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
	public function getProfile($username) {
		// TODO
		$user = User::where('username', $username)->first();
		return view('pages.profile')->with('user',$user);
	}
	
	public function getMyPage($username) {
		// TODO
		$user = User::where('username', $username)->first();

		$following_program = DB::table('users')
		->where('users.id', $user->id)
		->leftjoin('my_programs', 'users.id', '=', 'my_programs.user_id')
		->leftjoin('programs', 'my_programs.program_id', '=', 'programs.id')
		->get();

		return view('page.user-page')->with('following_program', $following_program);
	}
	
	public function postUpdate(Request $request, $username) {
		// TODO
		$user = User::where('username', $username)->first();
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
