<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pet_report;
use Illuminate\Http\Request;

class Pet_reportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pet_reports = Pet_report::orderBy('id', 'desc')->paginate(10);

		return view('pet_reports.index', compact('pet_reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pet_reports.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$pet_report = new Pet_report();

		

		$pet_report->save();

		return redirect()->route('pet_reports.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pet_report = Pet_report::findOrFail($id);

		return view('pet_reports.show', compact('pet_report'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pet_report = Pet_report::findOrFail($id);

		return view('pet_reports.edit', compact('pet_report'));
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
		$pet_report = Pet_report::findOrFail($id);

		

		$pet_report->save();

		return redirect()->route('pet_reports.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pet_report = Pet_report::findOrFail($id);
		$pet_report->delete();

		return redirect()->route('pet_reports.index')->with('message', 'Item deleted successfully.');
	}

}
