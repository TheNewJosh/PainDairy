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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('phone');
            $table->string('user_type');
            $table->string('user_no');
            $table->integer('doctor_res')->nullable();
            $table->string('age')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('address')->nullable();
            $table->string('nationality')->nullable();
            $table->string('state')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'block', 'delete'])->default('active')->index();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
