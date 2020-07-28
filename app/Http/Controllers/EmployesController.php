<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Department;


class EmployesController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
		$departments = Department::all();


		$workers = Worker::query()->selectRaw('workers.*, sum(work_times.worktime) as summary')
			->with('department')
			->with('position')
			->with('typeOfPayment')
			->with('workTimes')
			->join('work_times', 'workers.id', '=', 'work_times.worker_id')
			->groupBy('workers.id')
			->paginate($request->get('paginate', 15));


		#Сумму часов считает SQL
		/*
		SELECT w.id as w_id, w.first_name as first_name, SUM(worktime) as summary
	FROM workers as w
		LEFT JOIN work_times as wt ON wt.worker_id=w.id
	GROUP BY
		w_id, first_name
		 * */


		return view('alvarium.employes', [
			'workers' => $workers,
			'departments' => $departments
		]);
    }
}
