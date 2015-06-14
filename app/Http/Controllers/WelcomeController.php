<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

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

		return view('welcome', compact('posts'));
	}

	public function hola()
	{
		return view('hola');
	}

	public function sociedad()
	{
		return view('sociedad');
	}

	public function rastreo_maquinaria()
	{
		return view('rastreo_maquinaria');
	}

	public function rastreo_personas()
	{
		return view('rastreo_personas');
	}

	public function rastreo_automoviles()
	{
		return view('rastreo_automoviles');
	}

	public function rastreo_motos()
	{
		return view('rastreo_motos');
	}

	public function rastreo_bicicletas()
	{
		return view('rastreo_bicicletas');
	}

	public function administracione_control()
	{
		return view('administracione_control');
	}

}
