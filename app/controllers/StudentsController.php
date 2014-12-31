<?php
 


class StudentsController extends BaseController {

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

		$students = Student::orderBy('id')->paginate(5);
		

		
		
		//$files = File::files($public_path);
		$data = array(
			//'files'=> $images_path,
			'students'=> $students

			);
		return View::make('students.index',$data);
	}

	public function show($id)
	{

		$student = Student::find($id);
		$images_path = public_path()."/$student->images_path";
		
		//get all of the base names of the files
		$bNames = array_map('basename', File::files($images_path));

		$data = array(
			'student'=>$student,
			'bNames'=>$bNames
			);

		return View::make('students.show',$data);
	}

}