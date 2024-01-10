<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('permission')->default('0');
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('upzilla')->nullable();
            $table->string('hospital')->nullable();
            $table->string('patientName')->nullable();
            $table->integer('patientPhone')->nullable();
            $table->string('referenceName')->nullable();
            $table->integer('referencePhone')->nullable();
            $table->string('bloodGroup')->nullable();
            $table->integer('bagBlood')->nullable();
            $table->string('message')->nullable();
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
        Schema::dropIfExists('blood_requests');
    }
}
