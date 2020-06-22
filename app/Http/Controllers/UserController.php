<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Activation;
use App\User;
use DB;
class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('role_id','>',2)->get();

        return view('theme::dashboard.users.employ', ['users' => $users]);
    }



    public function shownew(Request $request)
    {
     
        $users = Activation::where('role_id','>',2)->get();



        return view('theme::dashboard.users.newemploy', ['users' => $users]);
    }


    public function activate(Request $request) {

        $request->validate([
            'email' => 'required|string|email',
            'activatecode' => 'required|string',
        ]);
        $user = DB::table('activations')->where('email', $request->email)->first();
        if($user){
            if ($user->activatecode === $request->activatecode) {
                switch ($user->role_id) {
                    case '2':
                        return view('theme::auth.activate_studio',['name'=>$user->name,'username'=>$user->username,'email'=>$user->email,'role_id'=>$user->role_id]);
                        break;
                    case '3':
                        return view('theme::auth.activate_doctor',['name'=>$user->name,'username'=>$user->username,'email'=>$user->email,'role_id'=>$user->role_id]);
                        break;
                    case '4':
                        return view('theme::auth.activate_assistant',['name'=>$user->name,'username'=>$user->username,'email'=>$user->email,'role_id'=>$user->role_id]);
                        break;
                    case '5':
                        return view('theme::auth.activate_secretary',['name'=>$user->name,'username'=>$user->username,'email'=>$user->email,'role_id'=>$user->role_id]);
                        break;
                    case '6':
                        return view('theme::auth.activate_patient',['name'=>$user->name,'username'=>$user->username,'email'=>$user->email,'role_id'=>$user->role_id]);
                        break;
                }
            } 
        }
        else {
          return back()->with('error', 'Your credentials dont match our records');
        }
  
    }
}