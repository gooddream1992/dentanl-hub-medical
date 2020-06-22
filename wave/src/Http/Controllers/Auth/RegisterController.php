<?php

namespace Wave\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Wave\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Notification;
use Carbon\Carbon;
use DB;

class RegisterController extends \App\Http\Controllers\Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if(setting('auth.username_in_registration') && setting('auth.username_in_registration') == 'yes'){
            return Validator::make($data, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'username' => 'required|string|max:20|unique:users',
                'password' => 'required|string|min:6|confirmed'
            ]);
        }

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $role = \TCG\Voyager\Models\Role::where('name', '=', config('voyager.user.default_role'))->first();

        $verification_code = NULL;
        $verified = 1;

        if(setting('auth.verify_email', false)){
            $verification_code = str_random(30);
            $verified = 0;
            
        }


        if(setting('auth.username_in_registration') && setting('auth.username_in_registration') == 'yes'){
            $user = User::create([
                'name' => $data['name'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'role_id' => $role->id,
                'verification_code' => $verification_code,
                'verified' => $verified,
                'trial_ends_at' => now()->addDays(setting('billing.trial_days', 14)),
            ]);

            if(setting('auth.verify_email', false)){
                $this->sendVerificationEmail($user);
                echo "auth_verify_email"; 
            }

            return $user;
        }

        $username = str_slug($data['name']);
        $username_original = $username;
        $counter = 1;

        while(User::where('username', '=', $username)->first()){
            $username = $username_original . (string)$counter;
            $counter += 1;
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $username,
            'password' => bcrypt($data['password']),
            'role_id' => $role->id,
            'verification_code' => $verification_code,
            'verified' => $verified,
            'trial_ends_at' => now()->addDays(setting('billing.trial_days', 14))
        ]);

        if(setting('auth.verify_email', false)){
            $this->sendVerificationEmail($user);
        }

        return $user;
    }

    private function sendVerificationEmail($user){
        Notification::route('mail', $user->email)->notify(new VerifyEmail($user));
    }

    public function showRegistrationForm()
    {
        return view('theme::auth.register');
    }

    public function verify(Request $request, $verification_code){
        $user = User::where('verification_code', '=', $verification_code)->first();

        $user->verification_code = NULL;
        $user->verified = 1;
        $user->email_verified_at = Carbon::now();
        $user->save();

        return redirect()->route('login')->with(['message' => 'Successfully verified your email. You can now login.', 'message_type' => 'success']);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        
        $email=$request->input('email');
        $password = bcrypt($request->input('password'));
        $username=$request->input('username');
        $name=$request->input('name');
        $account_type=$request->input('account_type');
        $data=array('email'=>$email,'password'=>$password,'username'=>$username,'name'=>$name,'account_type'=>$account_type,);
        
        DB::table('users')->insert($data);
        return redirect()->route('wave.home')->with(['message' => 'Successfully verified your email. You can now login.', 'message_type' => 'success']);

    }
    // Register Studio
    public function studio_register(Request $request)
    {

        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $name=$request->input('name');
        $username=$request->input('username');
        $account_type=$request->input('account_type');

        $legal_address=$request->input('legal_address');
        $legal_city = $request->input('legal_city');
        $legal_country=$request->input('legal_country');
        $std_address=$request->input('std_address');
        $std_city=$request->input('std_city');
        $std_country=$request->input('std_country');
        $phone=$request->input('phone_number');
        $mobile_phone=$request->input('mobile_number');
        $vat_code=$request->input('vat_code');
        $sdi_code=$request->input('sdi_code');
        

        $user_data = array('email' => $email, 'role_id' => 3,  'password' => $password, 'name' => $name, 'username' => $username, 'account_type' => $account_type);
        
        $check_email = DB::table('users')->where('email', $email)->first();
        if(!isset($check_email)){
            
            DB::table('users')->insert($user_data);
     
            $user= DB::table('users')->where('email', $email)->first();
                  
            $data=array('email' => $email, 'user_id'=>$user->id, 'legal_address'=>$legal_address,'legal_city'=>$legal_city,'legal_country'=>$legal_country,'studio_address'=>$std_address,'studio_city'=>$std_city,
                    'studio_country'=>$std_country, 'phone' => $phone, 'mobile_phone' => $mobile_phone, 'vat_code' => $vat_code, 'sdi_code' => $sdi_code, 'password' => $password);
            
            DB::table('studios')->insert($data);
            return redirect()->route('wave.home')->with(['message' => 'Successfully verified your email. You can now login.', 'message_type' => 'success']);
        }
        else{
            
            return redirect()->back()->with(['message' => 'This email already exist. Please use other email.', 'message_type' => 'success']);
        }
        

    }
    

    // Register Employees
    public function employe_register(Request $request)
    {
        
        $mobilenumber = $request->input('mobile_number');
        $skype=$request->input('skype');
        $whatsapp=$request->input('whatsapp');

        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $name=$request->input('name');
        $username=$request->input('username');
        $account_type=$request->input('account_type');

        $check_email = DB::table('users')->where('email', $email)->first();
        if(!isset($check_email)){

            $user_data = array('email' => $email, 'role_id' => 3, 'password' => $password, 'name' => $name, 'username' => $username, 'account_type' => $account_type);
            DB::table('users')->insert($user_data);
    
            $user= DB::table('users')->where('email', $email)->first();

            
            $data=array('user_id' => $user->id, 'mobilenumber' => $mobilenumber, 'skype'=>$skype,'whatsapp'=>$whatsapp, 'studio_id' => '1');
            
            DB::table('employees')->insert($data);
            return redirect()->route('wave.home')->with(['message' => 'Successfully verified your email. You can now login.', 'message_type' => 'success']);
        }
        else{
            
            return redirect()->back()->with(['message' => 'This email already exist. Please use other email.', 'message_type' => 'success']);
        }

    }
    //Register Patients
    
    public function patient_register(Request $request)
    {
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $name=$request->input('name');
        $username=$request->input('username');
        $account_type=$request->input('account_type');
        
        $birthday = $request->input('birthday');
        $sex = $request->input('sex');
        $address = $request->input('address');
        $house_number = $request->input('house_number');
        $city = $request->input('city');
        $country = $request->input('country');
        $phone = $request->input('phone');
        $mobile_phone = $request->input('mobile_phone');
        $health_card = $request->input('health_card');
        
        $check_email = DB::table('users')->where('email', $email)->first();
        if(!isset($check_email)){
            $user_data = array('email' => $email, 'role_id' => 3, 'password' => $password, 'name' => $name, 'username' => $username, 'account_type' => $account_type);
            DB::table('users')->insert($user_data);
    
            $user= DB::table('users')->where('email', $email)->first();

            
            $data=array('user_id' => $user->id, 'birthday' => $birthday, 'sex' => $sex, 'address' => $address, 'house_number' => $house_number, 'city' => $city, 'country' => $country, 'phone' => $phone, 
            'mobile_phone' => $mobile_phone, 'health_card'=>$health_card, 'studio_id' => '1');
            
            DB::table('patients')->insert($data);
            return redirect()->route('wave.home')->with(['message' => 'Successfully verified your email. You can now login.', 'message_type' => 'success']);
        }   
        else{
            
            return redirect()->back()->with(['message' => 'This email already exist. Please use other email.', 'message_type' => 'success']);
        }

    }

}
