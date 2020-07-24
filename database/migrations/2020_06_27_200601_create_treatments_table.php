<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->char('patient_name');
            $table->char('treatment_name');
            $table->char('description');
            $table->date('treatment_date');
            $table->timestamps();



            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            //fk, cascade ni kalau referrred user takdde , match tu hilang

            //fk, untuk doctor
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatments');
    }
}
