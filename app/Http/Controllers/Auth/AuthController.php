<?php

namespace App\Http\Controllers\Auth;

use App\Country;
use App\Distributor;
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
            'first_name' => 'required|alpha_num|max:255',
            'middle_name' => 'required|alpha_num|max:255',
            'last_name' => 'required|alpha_num|max:255',
            'birthdate' => 'required|date|max:255',
            'username' => 'required|alpha_num|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',

            'telephone_number' => 'required|alpha_num|max:255',
            'primary_address' => 'required|max:255',
            'secondary_address' => 'max:255',
            'company_address' => 'required|max:255',

            'ssn' => 'alpha_dash|max:255',
            'ein' => 'alpha_dash|max:255',
            'tin' => 'alpha_dash|max:255',

            'number' => 'required|max:255',
            'name' => 'required|max:255',
            'expiry' => 'required|max:255',
            'cvc' => 'required|alpha_dash|max:255',

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
        ]);


        $distributor = Distributor::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'user_id' => $user->id,

            'address_line1' => $data['primary_address'],
            'city_line1' => $data['primary_address' ],
            'state_line1' => $data['primary_address' ],
            'zip_line1' => $data['primary_address' ],
            'country' => $data['primary_address'],

            'address_line2' => $data['secondary_address'],
            'city_line2' => $data['secondary_address'],
            'state_line2' => $data['secondary_address'],
            'zip_line2' => $data['secondary_address'],

            'phone_number' => $data['telephone_number'],
            'landline_number' => $data['telephone_number'],

            'company_address' => $data['company_address'],

            'birthdate' => $data['birthdate'],

            'ssn' => $data['ssn'],
            'ein' => $data['ein'],
            'tin' => $data['tin'],

            'cc_no' => $data['number'],
            'cc_name' => $data['name'],
            'cc_expiry' => $data['expiry'],
            'cc_cvc' => $data['cvc'],
        ]);

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
        $countries = Country::orderBy('name', 'ASC')->pluck('name');
        return view('auth.register', ['countries' => $countries]);
    }

}
