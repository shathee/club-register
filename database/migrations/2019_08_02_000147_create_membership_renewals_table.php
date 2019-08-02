<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembershipRenewalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_renewals', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('membership_no')->nullable();
            $table->string('renewal_type');
            $table->text('member_payment_info')->nullable();
            $table->text('member_payment_period')->nullable();
            $table->string('member_payment_doc')->nullable();
            $table->string('is_submission_confirmed');
            $table->string('is_finance_approved');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('membership_renewals');
    }
}
