<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pet;
use Illuminate\Http\Request;
use Log;

class PetController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pets = Pet::orderBy('id', 'desc')->paginate(10);
	}

	public function store(Request $request)
	{
		$data = $request->input();
		Log::info($data);
		$validationRules = [
			'name' => 'required',
			'color' => 'required',
			'gender' => 'required',
			'pettype_id' => 'required',
		];
		$validate = $request->validate($validationRules);
		exit;
		$pet = new Pet();
		$pet->save();
	}

	public function show($id)
	{
		$pet = Pet::findOrFail($id);
	}

	public function update(Request $request, $id)
	{
		$pet = Pet::findOrFail($id);
		$pet->save();
	}

	public function destroy($id)
	{
		$pet = Pet::findOrFail($id);
		$pet->delete();
	}

}
