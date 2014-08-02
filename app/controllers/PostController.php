<?php


class PostController extends BaseController {
	
	/**
	 * Display a listing of the resource.
	 * GET /post
	 *
	 * @return Response
	 */
	public function index()
	{
		// /post -  Displays all post

		$postss = Post::orderBy('updated_at', 'desc')->paginate(10);
		$title  = 'Properties';

		return View::make('post.index')
			->with('postss',$postss)
			->with('title',$title);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /post/create
	 *
	 * @return Response
	 */
	public function create()
	{
		// 

		return View::make('post.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /post
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		
		$post                = new Post;
		$post->locality_id   = Input::get('locality');
		$post->entity_id     = Input::get('entity');
		$post->plus_id       = Input::get('plus');
		$post->dealtype_id   = Input::get('dealtype');
		$post->for_id        = Input::get('for');
		$post->size_id       = Input::get('size');
		$post->rent_price_id = Input::get('rent');
		$post->deposit_id    = Input::get('deposit');
		$post->floor_id      = Input::get('floor');
		$post->amenities_id  = Input::get('amenities');
		$post->save();

		Notification::success('Record saved Successfully');

		return Redirect::action('PostController@index');
		
	}

	/**
	 * Display the specified resource.
	 * GET /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /post/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		
		$post = Post::find($id);
		$post->delete();

		// redirect
		Notification::warning('Successfully deleted the Post!');
		/*Session::flash('message', 'Successfully deleted the Post!');*/
		return Redirect::action('PostController@index');

	}

}
