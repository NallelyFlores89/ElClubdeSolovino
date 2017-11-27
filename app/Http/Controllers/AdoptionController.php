<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$adoptions = Adoption::orderBy('id', 'desc')->paginate(10);

		return view('adoptions.index', compact('adoptions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('adoptions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$adoption = new Adoption();

		

		$adoption->save();

		return redirect()->route('adoptions.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$adoption = Adoption::findOrFail($id);

		return view('adoptions.show', compact('adoption'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$adoption = Adoption::findOrFail($id);

		return view('adoptions.edit', compact('adoption'));
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
		$adoption = Adoption::findOrFail($id);

		

		$adoption->save();

		return redirect()->route('adoptions.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$adoption = Adoption::findOrFail($id);
		$adoption->delete();

		return redirect()->route('adoptions.index')->with('message', 'Item deleted successfully.');
	}

}
