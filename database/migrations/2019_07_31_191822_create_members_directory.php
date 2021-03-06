<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersDirectory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberdirectories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('membership_no');
            $table->string('membership_type');
            $table->string('reg_email')->nullable();
            $table->string('fullname')->nullable();
            $table->string('fullname_bn')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('gender');
            $table->string('religion');
            $table->text('present_address')->nullable();
            $table->string('present_district');
            $table->text('permanent_address')->nullable();
            $table->string('permanent_district');
            $table->string('sust_department');
            $table->string('sust_reg_no')->nullable();
            $table->string('sust_session');
            //$table->string('sust_graduation_year');
            $table->string('blood_group');
            $table->string('member_photo')->nullable();
            $table->timestamps();
            $table->softDeletes();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('memberdirectories');
    }
}
