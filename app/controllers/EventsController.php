<?php
 


class EventsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{

		$events = Vent::orderBy('id','desc')->paginate(10);
		
		
		//$files = File::files($public_path);
		$data = array(
			//'files'=> $images_path,
			'events'=> $events

			);
		return View::make('events.index',$data);
	}

	public function show($id)
	{

		$events = Vent::find($id);

		$images_path = public_path()."/$events->images_path";

		//get all of the base names of the files
		$files = array_map('basename', File::files($images_path));


		$cont = $events->content;
		$relProj = $events->whereHas('nonprofits', function($q) use ($events)
		{
    		$q->where('content', 'like',"%$events->content%");

		})->take(4)->get();

		Log::warning(DB::getQueryLog());
		$data = array(
			'event'		=> $events,
			'relProjs'	=> $relProj,
			'files'		=> $files

			);

		return View::make('events.show',$data);
	}


}