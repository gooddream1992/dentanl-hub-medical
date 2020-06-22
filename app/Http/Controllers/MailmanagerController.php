<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Activation;

class MailmanagerController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('theme::profile.edit');
    }

    public function activation_email($id){
        $request_user = Activation::where('id', $id)->first();
        $email = $request_user->email;
        $active_code = chr(rand(65,90)) . rand(1,9) . chr(rand(65,90)) . rand(1,9).'-'.chr(rand(65,90)) . rand(1,9) . chr(rand(65,90)) . rand(1,9).'-'.chr(rand(65,90)) . rand(1,9) . chr(rand(65,90)) . rand(1,9).'-'.chr(rand(65,90)) . rand(1,9) . chr(rand(65,90)) . rand(1,9);
        $request_user->activatecode = $active_code;
        $request_user->save();
        $url_link = url('activation');
        $data = array("active_code"=>$active_code, "url_link" => $url_link);
     
        Mail::send('theme::emails.mail', $data, function($message) use($email) {
           $message->to($email, $email)->subject('Dentalhub Activation Mail');
           $message->from('dentalhub@co.com','Dentalhub Support');
        });
        
        return redirect()->back()->with('message', 'Successful! Activation Code Sent.');
    }
   
}
