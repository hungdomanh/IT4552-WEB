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

class UserController extends Controller
{
    //
	public function getProfile($username) {
		// TODO
		$user = User::where('user_name', $username)->first();
		return view('pages.profile')->with('user',$user);
	}
	
	public function getMyPage($username) {
		// TODO
		$user = User::where('user_name', $username)->first();
		$following_program = $user->following_program;
		return view('pages.user-page')->with([
			'following_program' => $following_program,
			'user' => $user
			]);
		return view('pages.user-page');
	}
	
	public function postUpdate(Request $request, $username) {
		// TODO
		$user = User::where('user_name', $username)->first();
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
