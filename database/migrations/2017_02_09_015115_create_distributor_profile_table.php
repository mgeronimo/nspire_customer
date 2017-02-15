<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistributorProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributor_profile', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('user_id');

            $table->integer('distributor_parent_id');

            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');

            $table->string('address_line1');
            $table->string('city_line1');
            $table->string('state_line1');
            $table->string('zip_line1');
            $table->string('country');

            $table->string('address_line2');
            $table->string('city_line2');
            $table->string('state_line2');
            $table->string('zip_line2');

            $table->string('phone_number');
            $table->string('landline_number');

            $table->string('company');
            $table->string('company_address');
            $table->string('company_city');
            $table->string('company_state');
            $table->string('company_zip');
            $table->string('company_email');
            $table->string('company_phone');

            $table->string('birthdate');

            $table->string('id_number');
            $table->string('id_type');

            $table->string('cc_no');
            $table->string('cc_name');
            $table->string('cc_expiry');
            $table->string('cc_cvc');

            $table->timestamps();
            $table->softDeletes();
//
//            $table->foreign('user_id')
//                ->references('id')->on('users')
//                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
    {
        Schema::drop('distributor_profile');
    }
}
