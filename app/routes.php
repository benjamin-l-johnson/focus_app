<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//This will make sure the $id they are looking for is "sanitized"
Route::pattern('id', '[0-9]+');


//Maybe the name should be index?
Route::any('/', function()
{
	return View::make('pages.start');
});

Route::any('contact', function()
{
	return View::make('pages.contact');
});

Route::any('culture', function()
{
	return View::make('pages.culture');
});

Route::any('services', function()
{
	return View::make('pages.services');
});

Route::any('team', ['as'=>'team', function()
{

	return View::make('pages.team')->withMembers(Member::orderBy('Name','asc')->get())->withVolunteers(Volunteer::orderBy('rank','desc')->paginate(8));
}]);

Route::any('donate', function()
{
	return View::make('pages.donate');
});

Route::any('mission', function()
{
	return View::make('pages.mission');
});

/*
* Events controllers
*/

//Lists all the events
Route::get('events',array('uses' => 'EventsController@index'));

//Shows a single event, using a named route of event
Route::get('events/{id}',array('as'=>'event','uses' => 'EventsController@show'));

/*
* Students controllers
*
*
*
*/

Route::get('organizations/students',
	
	array(
		'as'=>'students',
		'uses' => 'StudentsController@index'
		)
	);

Route::get('organizations/students/{id}',
	array(
		'as'=>'student',
		'uses' => 'StudentsController@show'
		)
	);

/*
* Nonprofit controllers
*
*
*
*/
Route::get('organizations/nonprofits',

	array(
		'as'=>'nonprofits',
		'uses' => 'NonprofitsController@index'
		)
	);

Route::get('organizations/nonprofits/{id}',
	array('as'=>'nonprofit',
		'uses' => 'NonprofitsController@show'
		)
	);


/*
|--------------------------------------------------------------------------
| Deploy Route
|--------------------------------------------------------------------------
|
| Look for the controller Server.php, if it exists. Then 
|
*/


if (file_exists(__DIR__.'/controllers/Server.php')) {
    Route::get('/deploy', 'Server@deploy');
}