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

class AuthenController extends Controller
{
    //
	public function getLogin(){
		// TODO
		return view('pages.login');
	}

	public function getSignup() {
		// TODO
		return view('pages.signup');
	}

	public function logout() {
		// TODO
		Auth::logout();
		return redirect('');
	}

	public function postSignup(Request $request) {
		// TODO
		$this->validate($request,[
			'fullname'=>'required',
			'email'=>'required',
			'password'=>'required',
			'password_confirmation'=>'required|same:password',
			'username'=>'required',
			'purpose'=>'required'
			]);
		$user = new User;
		$user->fullname = $request->fullname;
		$user->email = $request->email;
		$user->user_name = $request->username;
		$user->password = bcrypt($request->password);
		$user->purpose = $request->purpose;
		$user->save();
		Auth::login($user);
		return redirect('')->with('alert', 'Signup successfully.');
	}

	public function postLogin(Request $request) {
		// TODO
		if(Auth::attempt([
			'username'=>$request->username,
			'password'=>$request->password]))
		{
			return redirect("/my-page/{$request->username}");
		}
		else
		{
			return redirect('login')->with('alert','Login fail. Please try again');
		}
	}

}
