<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
	public function index()
	{
		return view('alvarium.upload');

	}

	public function store(Request $request)
	{
		echo 'upload';
//		$contents = simplexml_load_file(asset('workers.xml'));
		dump($request->file('file_xml'));
		if ($request->hasfile('file_xml')) {
			$fileName = time().'.'.request()->file('file_xml')->getClientOriginalExtension();
			request()->file('file_xml')->move('xml', $fileName);
		}

	}
}
