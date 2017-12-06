<?php

namespace App\Http\Controllers;
use App\MyProgram;
use App\User;
use DB;

// use function get request url
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    //
	public function getLogin(){
		// TODO
		if (Auth::check()) {
			return view('pages.home');	
		} else {
			return view('pages.login');
		}
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

	public function postSignup(Request $req) {
		// TODO
		$this->validate($req,[
			'fullname'=>'required',
			'email'=>'required',
			'password'=>'required',
			'password_confirm'=>'required|same:password',
			'username'=>'required',
			'purpose'=>'required'
			]);
		$user = new User;
		$user->fullname = $req->fullname;
		$user->email = $req->email;
		$user->username = $req->username;
		$user->password = bcrypt($req->password);
		$user->purpose = $req->purpose;
		$user->save();
		Auth::login($user);
		// return $user;
		return redirect('')->with('alert', 'Signup successfully.');
	}

	public function postLogin(Request $req) {
		// TODO
		$this->validate($req,[
			'username'=>'required',
			'password'=>'required']);

		$credentials = array('username'=>$req->username,'password'=>$req->password);
		if (Auth::attempt($credentials)) {
			$user = Auth::user();
			if ($user->height && $user->weight) {
				return redirect("my-page");
			}
			return redirect("profile");
		} else {
			return redirect('login')->with('alert','Login fail. Please try again');
		}
	}

}
