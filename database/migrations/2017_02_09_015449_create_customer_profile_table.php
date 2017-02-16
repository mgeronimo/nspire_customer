<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_profile', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('user_id');
            // $table->integer('distributor_parent_id');
            // $table->integer('direct_referrer_id');
            $table->string('distributor_parent_username');
            $table->string('direct_referrer_username');

            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');

            $table->string('birthdate');

            $table->string('address_line1');
            $table->string('city_line1');
            $table->string('state_line1');
            $table->string('zip_line1');
            $table->string('country');

            $table->string('phone_number');
            $table->string('landline_number');

            $table->string('id_number');
            $table->string('id_type');

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
        Schema::drop('customer_profile');
    }
}
