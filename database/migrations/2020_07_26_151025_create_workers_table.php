<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 50);
            $table->string('second_name', 50);
            $table->string('patronymic', 50);
            $table->date('birthday');
            $table->unsignedBigInteger('position_id');
			$table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
            $table->unsignedBigInteger('department_id');
			$table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
			$table->unsignedBigInteger('type_payments_id');
			$table->foreign('type_payments_id')->references('id')->on('type_payments')->onDelete('cascade');
			$table->unsignedInteger('rate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
}
