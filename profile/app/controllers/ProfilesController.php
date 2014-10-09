<?php

class ProfilesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$profiles = Profile::All();

		return View::make('profiles.index',['profiles' => $profiles]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			return View::make('profiles.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$payload = Input::all();


		$validation = Validator::make($payload, Profile::$rules);
		if($validation->fails())
		{
			
			return Redirect::to('profiles/create')
				->withErrors($validation);
				
		} 
		else{
			
			if(Input::hasFile('photo'))
				{
				$file = Input::file('photo');
				$destination = public_path().'/uploads/';
				$filename = str_random(12).$file->getClientOriginalName();
				$success = $file->move($destination, $filename);
				$photo = $filename;
				}
			if(Input::hasFile('cv'))
			{
				$file = Input::file('cv');
				$destination = public_path().'/uploads/';
				$filename = str_random(12).$file->getClientOriginalName();
				$success = $file->move($destination, $filename);
				$cv = $filename;
			}
		
		$profile = new Profile;
		$profile->firstname = Input::get('firstname');
		$profile->lastname    = Input::get('lastname');
		$profile->nickname = Input::get('nickname');
		$profile->phonenumber    = Input::get('phonenumber');
		$profile->photo = $photo;
		$profile->cv    =$cv;
		$profile->save();
		//Auth::login($user);

		return Redirect::route('profiles.index');

	}
			


	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
