<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ExtravioReport;
use Illuminate\Http\Request;

class ExtravioReportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$extravio_reports = ExtravioReport::orderBy('id', 'desc')->paginate(10);

		return view('extravio_reports.index', compact('extravio_reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('extravio_reports.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$extravio_report = new ExtravioReport();

		

		$extravio_report->save();

		return redirect()->route('extravio_reports.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$extravio_report = ExtravioReport::findOrFail($id);

		return view('extravio_reports.show', compact('extravio_report'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$extravio_report = ExtravioReport::findOrFail($id);

		return view('extravio_reports.edit', compact('extravio_report'));
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
		$extravio_report = ExtravioReport::findOrFail($id);

		

		$extravio_report->save();

		return redirect()->route('extravio_reports.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$extravio_report = ExtravioReport::findOrFail($id);
		$extravio_report->delete();

		return redirect()->route('extravio_reports.index')->with('message', 'Item deleted successfully.');
	}

}
