<?php

namespace App\Http\Controllers\Auth;

use App\Country;
use App\Customer;
use App\OcCountries;
use App\OcZones;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;
use App\ActivationService;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $activationService;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(ActivationService $activationService)
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        $this->activationService = $activationService;
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getLogin(Request $request)
    {
        $field = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $request->merge([$field => $request->input('login')]);
        if (Auth::attempt($request->only($field, 'password')) && Auth::user()->activated == 1) {
            return redirect('/');
        } else if (Auth::attempt($request->only($field, 'password')) && Auth::user()->activated == 0) {
            Auth::logout();
            return redirect('/login')->with('warning', 'Please validate your account first. An email with validation code is sent to your email. Thanks.');
        }
        return redirect('/login')->withErrors([
            'error' => 'These credentials do not match our records.',
        ]);

    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        $user = $this->create($request->all());
        $this->activationService->sendActivationMail($user);
        return redirect('/login')->with('status', 'We sent you an activation code. Check your email.');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required','regex:/^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/'],
            'middle_name' => ['required','regex:/^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/'],
            'last_name' => ['required','regex:/^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/'],
            'birthdate' => 'required|date|max:255',
            'username' => 'required|alpha_num|min:2|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|max:30|confirmed',
            'telephone_number' => 'required|alpha_dash|min:7|max:255',
            'address_line1' => 'required|string',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'postal_code' => 'required|max:255',
            'country' => 'required|max:255',
            'id_no' => 'alpha_dash|max:255',
            // 'number' => 'required|string|max:20',
            // 'name' => 'required|max:255',
            // 'expiry' => 'required|max:255',
            // 'cvc' => 'required|integer|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 'customer',
        ]);
        $customer = Customer::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'user_id' => $user->id,
            'address_line1' => $data['address_line1'],
            'city_line1' => $data['city' ],
            'state_line1' => $data['state' ],
            'zip_line1' => $data['postal_code' ],
            'country' => $data['country'],
            'phone_number' => $data['telephone_number'],
            'birthdate' => $data['birthdate'],
//            'cc_no' => $data['number'],
//            'cc_name' => $data['name'],
//            'cc_expiry' => $data['expiry'],
//            'cc_cvc' => $data['cvc'],
            'id_number' => $data['id_no'],
            'id_type' => $data['id_type'],
        ]);
        $customer->id_number = $data['id_no'];
        $customer->id_type = $data['id_type'];
        $customer->save();
        return $user;
    }

    public function authenticated(Request $request, $user)
    {
        if (!$user->activated) {
            $this->activationService->sendActivationMail($user);
            auth()->logout();
            return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }
        return redirect()->intended($this->redirectPath());
    }

    public function activateUser($token)
    {
        if ($user = $this->activationService->activateUser($token)) {
            auth()->login($user);
            return redirect($this->redirectPath());
        }
        abort(404);
    }

    public function showRegistrationForm()
    {
        $countries = OcCountries::select('country_id','name', 'iso_code_3')->whereIn('country_id', [223, 168, 232, 172, 38])->orderBy('name')->get();
        $zones = OcZones::select('zone_id','name', 'code', 'country_id')->whereIn('country_id', [223, 168, 232, 172, 38])->orderBy('name')->get();
        return view('auth.register')
            ->with('countries', $countries)
            ->with('zones', $zones);
    }

}
