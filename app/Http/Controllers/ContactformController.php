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
		$text = $request->name . " " . $request->email . " ha escrito: " . $request->text;
		Mail::send('hola', array('text' => $text, 'message' => $text), function($message)
		{
			$message->from('infoonetrackergps@gmail.com', 'OneTrackerGPS');
			$message->to('servicio@onetrackergps.co', 'Mensaje nuevo desde contacto')->subject('Mensaje nuevo desde contacto');
			$message->cc("infoonetrackergps@gmail.com");
		});

// CORCEL
		$params = array(
			'database'  => 'otgps_blog',
			'username'  => 'otgps_master',
			'password'  => 'R0s6l3sg',
			'prefix'    => 'wp_' // default prefix is 'wp_', you can change to your own prefix
		);
		\Corcel\Database::connect($params);
		//$posts = \Corcel\Post::published()->get();
		$posts = \Corcel\Post::where('post_content', 'LIKE', "%%")->get();
		
		//return redirect('ccservice/');
		return view('welcome', compact('posts'));
	}
}


