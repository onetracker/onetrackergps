<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactformRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mail;

use App\onetrackergps\entities\Contactform;

class ContactformController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function contact()
	{
		return view('new_contactform');
	}
	public function contact_save(ContactformRequest $request)
	{
		/*
		PERSISTIMOS CONTACTO
		*/
		$contact_form = Contactform::create([
			
			//"id" => 4,
			"name" => $request->name,
			"email" => $request->email,
			"city" => $request->city,
			"group" => $request->group,
			"subject" => $request->subject,
			"text" => $request->text,
		]);

		/*
		INFORMAMOS
		*/
		$meesage = 'Hola. Ha habido un contacto niños';
		Mail::send('hola', array('html' => 'view', 'message' => $meesage), function($message)
		{
			$message->to('barcodepandora@gmail.com', 'German')->subject('Ha habido un contacto!');
		});
		
		//return redirect('ccservice/');
		return view('welcome');
	}
}


