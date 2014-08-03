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

// Confide routes
Route::get('register', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('/', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('logout', 'UsersController@logout');


// Post Resourceful route
Route::resource( 'post', 'PostController');



// Test route to check queries
Route::get('/test', function()
{

	/*$title = 'TEST Page';*/
	/*$entities = Entity::where('shoptype_id', '>=', '1')->get();

*/	$entities = Entity::All();
	echo $entities->count();

	
	/*foreach($entities as $entity)
		echo $entity->entityname.' >>>> '. $entity->agent->email.' | '.$entity->agent->mobile1.' | '.$entity->agent->mobile2,'<br>';
*/

	/*return View::make('test.index')
		->with('title',$title);*/

});


Route::get('/page/search', function()
{

	$title  = 'Search';

	return View::make('page.search')
		->with('title',$title);
});