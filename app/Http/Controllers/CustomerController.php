<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Distributor;
use App\User;
use Validator;

use Auth;
use App\ActivationService;

class CustomerController extends Controller
{
    protected $activationService;

    public function __construct(ActivationService $activationService)
    {
        $this->activationService = $activationService;
    }

    public function showCustomerDetails()
    {

    }

    public function getCustomerDetails()
    {

    }

    public function updateCustomerDetails(Request $request)
    {

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        $old_email = Auth::user()->email;
        $user = $this->update($request->all());

        if($old_email != $user->email){

            $this->activationService->sendActivationMail($user);

            return redirect('/profile')->with('status', 'We sent you an activation code. Check your email.');
        }else{
            return redirect('/profile')->with('status', 'Profile updates has been saved.');
        }

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|alpha|max:255',
            'middle_name' => 'required|alpha|max:255',
            'last_name' => 'required|alpha|max:255',
            'birthdate' => 'required|date|max:255',
            'username' => 'required|alpha_num|max:255|unique:users,id,'.Auth::user()->id,
            'email' => 'required|email|max:255|unique:users,id,'.Auth::user()->id,

            'telephone_number' => 'required|alpha_num|max:255',
            'address_line1' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'postal_code' => 'required|max:255',
            'country' => 'required|max:255',

            'ssn' => 'alpha_dash|max:255',
            'ein' => 'alpha_dash|max:255',
            'tin' => 'alpha_dash|max:255',

            // 'number' => 'required|max:255',
            // 'name' => 'required|max:255',
            // 'expiry' => 'required|max:255',
            // 'cvc' => 'required|alpha_dash|max:255',

        ]);
    }

    protected function update(array $data)
    {

        $user = User::find(Auth::user()->id);

        $user->update([
            'username' => $data['username'],
            'email' => $data['email']
        ]);


        Distributor::where('user_id', '=', Auth::user()->id)
            ->update([
                'first_name' => $data['first_name'],
                'middle_name' => $data['middle_name'],
                'last_name' => $data['last_name'],
                'user_id' => $user->id,

                'address_line1' => $data['address_line1'],
                'city_line1' => $data['city'],
                'state_line1' => $data['state'],
                'zip_line1' => $data['postal_code'],
                'country' => $data['country'],

                'phone_number' => $data['telephone_number'],

                'birthdate' => $data['birthdate'],

                'ssn' => $data['ssn'],
                'ein' => $data['ein'],
                'tin' => $data['tin'],

                // 'cc_no' => $data['number'],
                // 'cc_name' => $data['name'],
                // 'cc_expiry' => $data['expiry'],
                // 'cc_cvc' => $data['cvc'],
            ]);

        return $user;
    }


}
