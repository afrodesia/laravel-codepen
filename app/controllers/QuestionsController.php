<?php

class QuestionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return 'Displaying all questions';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// /questions/create
		return 'Displaying a form to create a new question';
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// POST /questions

		return Redirect::route('questions.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($userId, $questionId)
	{
		// GET => /questions/id

		return "Show specific question with id of : ". $questionId . " That is relate to associated username of ". $userId;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// GET => /questions/id/edit
		return 'Displaying a form to edit a existing record';
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// PUT/PATH  /questions/id
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// DELETE  => /questions/id/delete
	}

}