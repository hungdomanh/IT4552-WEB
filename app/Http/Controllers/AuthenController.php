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
		return view('users.login');
	}

	public function getSignup() {
		// TODO		
	}

	public function logout() {
		// TODO
	}

	public function postSignup() {
		// TODO
	}

	public function postLogin() {
		// TODO
	}

}
