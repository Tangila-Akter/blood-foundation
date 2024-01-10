<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMobileToFoundationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('foundations', function (Blueprint $table) {
            $table->string('mobile')->nullable();
            $table->string('register_no')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_verified')->default(0)->comment('0 = not verified, 1 = verified');
            $table->string('blood_group')->nullable();
            $table->string('gender')->nullable();
            // $table->foreignId('division_id')->nullable()->constrained('divisions')->onDelete('set null');
            // $table->foreignId('district_id')->nullable()->constrained('districts')->onDelete('set null');
            // $table->foreignId('upazilla_id')->nullable()->constrained('upazillas')->onDelete('set null');
            // $table->foreignId('union_id')->nullable()->constrained('unions')->onDelete('set null');
            // $table->string('ward_id')->nullable();
            // $table->foreignId('village_id')->nullable()->constrained('villages')->onDelete('set null');
            $table->string('nid_no')->nullable();
            $table->string('birth_certificate_no')->nullable();
            $table->boolean('is_donnar')->default(0)->comment('0=not donnar, 1=blood donar');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('occupation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('foundations', function (Blueprint $table) {
            $table->dropColumn('mobile');
            $table->dropColumn('register_no');
            $table->dropColumn('image');
            $table->dropColumn('is_verified');
            $table->dropColumn('blood_group');
            $table->dropColumn('gender');
            $table->dropColumn('nid_no');
            $table->dropColumn('birth_certificate_no');
            $table->dropColumn('is_donnar');
            $table->dropColumn('father_name');
            $table->dropColumn('mother_name');
            $table->dropColumn('occupation');
        });
    }
}
