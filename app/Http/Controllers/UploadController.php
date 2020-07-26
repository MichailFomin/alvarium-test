<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
	public function index()
	{
		echo 'index';

	}

	public function store(Request $request)
	{
		echo 'upload';
		$contents = simplexml_load_file(asset('workers.xml'));
		dump($contents);
	}
}
