<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Department;

class DepartmentsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {

		$departments = Department::all();

		$workers = Worker::query()->selectRaw('workers.*, sum(work_times.worktime) as summary')
			->where('department_id', $id)
			->with(['department', 'position', 'typeOfPayment', 'workTimes'])
			->join('work_times', 'workers.id', '=', 'work_times.worker_id')
			->groupBy('workers.id')
			->paginate($request->get('paginate', 15));

		return view('alvarium.departments', [
			'workers' => $workers,
			'departments' => $departments
		]);
    }

}
