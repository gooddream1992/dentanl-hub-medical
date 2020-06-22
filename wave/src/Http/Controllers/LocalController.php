<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LocalController extends \App\Http\Controllers\Controller
{
    public function index($locale){
        
       App::setLocale($locale);
        session()->put('locale', $locale);
        
        return redirect()->back();
    
     
    }

   
}
