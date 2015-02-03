<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller {

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
		return view('page.home');
	}

  public function about()
  {
    return view('page.about');
  }

  public function quote(Request $request)
  {

    Mail::send('emails.quote', ['empty' => 'stuff'], function($message)
    {
      $message->to('drew@mainstreetmower.com', 'Drew Schmaltz')->subject('New Quote!');
    });

    return Mail::failures();

    return back();
  }

}
