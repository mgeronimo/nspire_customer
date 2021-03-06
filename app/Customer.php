<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer_profile';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', // user account id
        'last_name', 'first_name','middle_name', // personal name
        'address_line1', 'city_line1','state_line1','zip_line1','country', // address line 1
        'phone_number', 'landline_number',//phone details
        'company', 'company_address','company_state','company_zip','company_email','company_phone',
        'birthdate', 'sss','ein','tin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
