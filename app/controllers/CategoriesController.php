<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Category::all();

		return View::make('categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new category
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('categories.create');
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Category::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)
							->withInput();

		}

		$category = new Category;

		$category->name = $data['name'];
		$category->slug = Str::slug($data['name']);

		$category->save();

		return Redirect::route('admin.categories.index')
							->with('message', 'Category created');
	}

	/**
	 * Display the specified category.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$category = Category::findOrFail($id);

		return View::make('categories.show', compact('category'));
	}

	/**
	 * Show the form for editing the specified category.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = Category::find($id);

		return View::make('categories.edit', compact('category'));
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$category = Category::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Category::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput()
							->with('message', 'Something went wrong.');;
		}

		$category->update($data);

		return Redirect::route('admin.categories.index')
					->with('message', 'Category updated.');;
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$category = Category::find($id);

		if($category)
		{
			Category::destroy($id);
			return Redirect::route('admin.categories.index')
				->with('message', 'Category deleted.');
		}

		return Redirect::route('admin.categories.index')
					->with('message', 'Something went wrong.');

	}

}
