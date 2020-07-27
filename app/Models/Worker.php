<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{


	public function department(){
		return $this->belongsTo('App\Models\Department', 'department_id', 'id');
	}

	public function position(){
		return $this->belongsTo('App\Models\Position', 'position_id', 'id');
	}

	public function typeOfPayment(){
		return $this->belongsTo('App\Models\TypePayment', 'type_payments_id', 'id');
	}

	public function workTimes(){
		return $this->hasMany('App\Models\WorkTime', 'worker_id', 'id');
	}

}
