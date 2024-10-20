<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id');
            $table->string('name', 100);
            $table->date('work_on');
            $table->dateTime('work_start_time')->nullable();
            $table->dateTime('work_end_time')->nullable();
            $table->dateTime('break_time_total');
            $table->dateTime('work_time_total');
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
        Schema::dropIfExists('administrators');
    }
}
