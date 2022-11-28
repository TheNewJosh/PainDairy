<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pain_records', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('doctor_id')->nullable();
            $table->string('code')->nullable();
            $table->string('where_hurt')->nullable();
            $table->string('severity')->nullable();
            $table->string('describe_pain')->nullable();
            $table->string('type_pain')->nullable();
            $table->string('factor_pain')->nullable();
            $table->string('pain_lasted')->nullable();
            $table->string('what_diet')->nullable();
            $table->string('what_medications')->nullable();
            $table->string('have_allergy')->nullable();
            $table->string('symptoms')->nullable();
            $table->string('doctor_comment')->nullable();
            $table->enum('status', ['pending', 'seen'])->default('seen')->index();
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
        Schema::dropIfExists('pain_records');
    }
};
