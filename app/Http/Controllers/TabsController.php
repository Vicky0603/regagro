<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tabs;

class TabsController extends Controller
{
	public function index() {
		$lines = tabs::all();
		return view('tabs.index', compact('lines'));
	}

	public function record(Request $request) {

		$this->validate ($request, [

			'name' => 'required|unique:tabs,name',
			'latitude' => 'required',
			'longitude' => 'required',
			'population' => 'required'

		]);

		//return Request::all();
		//dump($request->all());
		$data = $request->all();
		$tabs = new tabs;

		$tabs->fill($data);
		//dump($tabs);

		$tabs->save();

		return redirect('/');
	}
}
