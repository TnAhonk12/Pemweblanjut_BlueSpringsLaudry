<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function registerPostData(Request $request)
    {
        //dd($request->except(['_token', 'addLaundryData']));
        //Cucian::create($request->all()); 
        User::create($request->except(['_token', 'submitUserData','confirm-password','updated_at','created_at'])); 
        return redirect('/blue-springs-laundry/login'); 
    }
}
