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

Route::get('/', function()
{
	return View::make('hello');
});




// Confide RESTful route
// Route::get('users/confirm/{code}', 'UsersController@getConfirm');
// Route::get('users/reset_password/{token}', 'UsersController@getReset');
// Route::get('users/reset_password', 'UsersController@postReset');
// Route::controller( 'users', 'UsersController');


// Post Resourceful route
Route::resource( 'post', 'PostController');



// Test route to check queries
Route::get('/test', function()
{

	/*$title = 'TEST Page';*/
	/*$entities = Entity::where('shoptype_id', '>=', '1')->get();

*/	$entities = Entity::All();

	/*foreach($entities as $entity)
		echo $entity->entityname,' ', $entity->shoptype_id,'<br>';
*/
	foreach($entities as $entity)
		echo $entity->entityname/*.' >>>> '. $entity->agent->email.' | '.$entity->agent->mobile1.' | '.$entity->agent->mobile2*/,'<br>';


	/*return View::make('test.index')
		->with('title',$title);*/

});


Route::get('/page/search', function()
{

	$title  = 'Search';

	return View::make('page.search')
		->with('title',$title);
});

//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');
