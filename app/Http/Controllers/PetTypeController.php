<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PetType;
use Illuminate\Http\Request;

class PetTypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pet_types = PetType::orderBy('id', 'desc')->paginate(10);

		return view('pet_types.index', compact('pet_types'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pet_types.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$pet_type = new PetType();

		

		$pet_type->save();

		return redirect()->route('pet_types.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pet_type = PetType::findOrFail($id);

		return view('pet_types.show', compact('pet_type'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pet_type = PetType::findOrFail($id);

		return view('pet_types.edit', compact('pet_type'));
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
		$pet_type = PetType::findOrFail($id);

		

		$pet_type->save();

		return redirect()->route('pet_types.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pet_type = PetType::findOrFail($id);
		$pet_type->delete();

		return redirect()->route('pet_types.index')->with('message', 'Item deleted successfully.');
	}

}
