<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class UploadController extends Controller
{
	public function index()
	{
		return view('alvarium.upload');

	}

	public function store(Request $request)
	{

		if ($request->hasfile('file_xml')) {
			$fileName = time().'.'.request()->file('file_xml')->getClientOriginalExtension();
			request()->file('file_xml')->move('xml', $fileName);
			dump($fileName);

			$contents = simplexml_load_file(asset('xml/' . $fileName));
			dump($contents);

			$arrayToDB = [];
			foreach ($contents->workers as $workerXML) {

				$arrayToDB[] = [
					'first_name' => $workerXML->firstname,
					'second_name' => $workerXML->secondname,
					'patronymic' => $workerXML->patronimic,
					'birthday' => date("Y-m-d", strtotime($workerXML->birthday)),
					'department_id' => $workerXML->department_id,
					'position_id' => $workerXML->position_id,
					'type_payments_id' => $workerXML->type_payment_id,
					'rate' => $workerXML->rate,
					'created_at' => now(),
					'updated_at' => now(),
				];

			}
			if (DB::table('workers')->insert($arrayToDB)) {
				File::delete(public_path().'/xml/'.$fileName);
				return redirect()->route('employes.show')->with('message', 'Загружено записей: ' . count($arrayToDB) );
			}



		}


	}
}
