<?php
 


class NonprofitsController extends BaseController {

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

		$nProfs = Nonprofit::orderBy('rank','desc')->paginate(5);
		

		
		
		//$files = File::files($public_path);
		$data = array(
			//'files'=> $images_path,
			'nProfs'=> $nProfs

			);
		return View::make('nonprofits.index',$data);
	}

	public function show($id)
	{

		$nProf = Nonprofit::find($id);
		$images_path = public_path()."/$nProf->images_path";
		
		//get all of the base names of the files
		$bNames = array_map('basename', File::files($images_path));

		$data = array(
			'nProf'=>$nProf,
			'bNames'=>$bNames,
			);

		return View::make('nonprofits.show',$data);
	}

}