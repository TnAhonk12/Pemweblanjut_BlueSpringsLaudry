<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Collection;

class UserController extends Controller
{
    public function viewuserclass()
    {
        $userView = DB::table('user')
                        ->orderBy('id_pelanggan', 'asc')
                        ->get();
        return view('data-pelanggan', ['view' => $userView]);
    }

    public function userPostData(Request $request)
    {
        //dd($request->except(['_token', 'addLaundryData']));
        //Cucian::create($request->all()); 
        User::create($request->except(['_token', 'submitUserDataAdminPanel','updated_at','created_at'])); 
        return redirect('/blue-springs-laundry/data-pelanggan'); 
    }

    public function userEditData($id_pelanggan,Request $request)
    {
        //dd(Cucian::find($id_cucian));
        $userUpdate = User::find($id_pelanggan);
        $userUpdate->update($request->except(['_token', 'updateUserData','updated_at','created_at']));
        return redirect('/blue-springs-laundry/data-pelanggan'); 
    }

    public function userDeleteData($id_pelanggan,Request $request)
    {
        //dd(Cucian::find($id_cucian));
        $userDelete = User::find($id_pelanggan);
        $userDelete->delete($request->except(['_token', 'deleteUserData','updated_at','created_at']));
        return redirect('/blue-springs-laundry/data-pelanggan'); 
    }
}
