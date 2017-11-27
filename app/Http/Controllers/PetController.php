<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pet;
use Illuminate\Http\Request;

class PetController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pets = Pet::orderBy('id', 'desc')->paginate(10);

		return view('pets.index', compact('pets'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pets.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$pet = new Pet();

		

		$pet->save();

		return redirect()->route('pets.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pet = Pet::findOrFail($id);

		return view('pets.show', compact('pet'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pet = Pet::findOrFail($id);

		return view('pets.edit', compact('pet'));
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
		$pet = Pet::findOrFail($id);

		

		$pet->save();

		return redirect()->route('pets.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pet = Pet::findOrFail($id);
		$pet->delete();

		return redirect()->route('pets.index')->with('message', 'Item deleted successfully.');
	}

}
