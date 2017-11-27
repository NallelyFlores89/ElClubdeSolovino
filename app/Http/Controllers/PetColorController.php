<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PetColor;
use Illuminate\Http\Request;

class PetColorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pet_colors = PetColor::orderBy('id', 'desc')->paginate(10);

		return view('pet_colors.index', compact('pet_colors'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pet_colors.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$pet_color = new PetColor();

		

		$pet_color->save();

		return redirect()->route('pet_colors.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pet_color = PetColor::findOrFail($id);

		return view('pet_colors.show', compact('pet_color'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pet_color = PetColor::findOrFail($id);

		return view('pet_colors.edit', compact('pet_color'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$pet_color = PetColor::findOrFail($id);

		

		$pet_color->save();

		return redirect()->route('pet_colors.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pet_color = PetColor::findOrFail($id);
		$pet_color->delete();

		return redirect()->route('pet_colors.index')->with('message', 'Item deleted successfully.');
	}

}
