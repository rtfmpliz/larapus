<?php

class HomeController extends BaseController {



protected $layout = 'layouts.master';

public function dashboard()
{
	$this->layout->content = View::make('dashboard.index')->withTitle('Dashboard');
}
public function authenticate()
{
	//ambil credential dari $_POST variable
	$credentials = array(
		'email'=>Input::get('email'),
		'password'=>Input::get('password'),
		);
	try{
		//authentikasi user
		$user=Sentry::authenticate($credentials,false);
		//redirect user ke dashboard
		return Redirect::intended('dashboard');
	}

	catch (Cartalyst\Sentry\Users\WrongPasswordException $e){
		return Redirect::back()->with('errorMessage','Password yg anda masukkan salah');
	}
		catch(Exception $e){
		//kembalikan user ke halaman sebelumnya (login)
		return Redirect::back()->with('errorMessage',trans('Akun dengan email tersebut tidak ditemukan di sistem kami'));
	}
}
	public function logout()
	{
		//logout user
		Sentry::logout();
		//redirect user ke halaman login
		return Redirect::to('login')->with('successMessage', 'Anda berhasil logout');
	}
	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }

}
