<?php 

namespace App\Http\Controllers;
Use Auth;


class AuthController extends controller
{

	function showLogin (){
		return view ('login');

	}

	function loginProcess (){
		if (Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('beranda')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek email dan password Anda');
		}

	}

	function logout (){
		Auth::logout();
		return redirect('beranda');

	}

	function registration (){

	}
	
	function forgotPassword (){

	}
	
}