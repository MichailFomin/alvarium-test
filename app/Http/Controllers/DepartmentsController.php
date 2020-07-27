<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Department;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {

		$departments = Department::get();

		if ($request->paginate){
			$workers = Worker::where('department_id', $id)
				->with('department')
				->with('position')
				->with('typeOfPayment')
				->with('workTimes')
				->groupBy('workers.id')
				->paginate($request->paginate);

			$workers->each(function (Worker $worker) {
				$worker->summary = $worker->workTimes->sum('worktime');
			});
		} else {
			$workers = Worker::where('department_id', $id)
				->with('department')
				->with('position')
				->with('typeOfPayment')
				->with('workTimes')
				->groupBy('workers.id')
				->paginate(15);

			$workers->each(function (Worker $worker) {
				$worker->summary = $worker->workTimes->sum('worktime');
			});
		}


		return view('alvarium.departments', [
			'workers' => $workers,
			'departments' => $departments
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
