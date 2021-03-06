<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Laracasts\Flash\Flash;

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

  public function windermere()
  {
    return view('page.windermere');
  }

  public function quote(Request $request)
  {

    Mail::send('emails.quote', $request->all(), function($message)
    {
      $message->to('drew@mainstreetmower.com', 'Drew Schmaltz')->subject('New Quote!');
    });

    Flash::success('Thank you for your interest in C.A. Lawns.  We will be in contact soon.');

    return back();
  }

}
