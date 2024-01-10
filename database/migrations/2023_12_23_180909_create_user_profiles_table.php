<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('User_id');
            $table->String('Name')->nullable();
            $table->String('FatherName')->nullable();
            $table->String('MotherName')->nullable();
            $table->String('Gender')->nullable();
            $table->String('Email')->nullable();
            $table->String('AnotherPhone')->nullable();
            $table->String('BloodGroup')->nullable();
            $table->String('Occupation')->nullable();
            $table->String('BirthplaceDivision')->nullable();
            $table->String('BirthplaceDistrict')->nullable();
            $table->String('BirthplaceUpzilla')->nullable();
            $table->String('BirthplaceUnion')->nullable();
            $table->String('BirthplaceWard')->nullable();
            $table->String('BirthplaceVillage')->nullable();
            $table->String('PermanentDivision')->nullable();
            $table->String('PermanentDistrict')->nullable();
            $table->String('PermanentUpzilla')->nullable();
            $table->String('PermanentUnion')->nullable();
            $table->String('PermanentWard')->nullable();
            $table->String('PermanentVillage')->nullable();
            $table->String('CurrentDivision')->nullable();
            $table->String('CurrentDistrict')->nullable();
            $table->String('CurrentUpzilla')->nullable();
            $table->String('CurrentUnion')->nullable();
            $table->String('CurrentWard')->nullable();
            $table->String('CurrentVillage')->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
}
