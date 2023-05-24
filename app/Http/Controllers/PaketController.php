<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    public function viewpaketclass()
    {
        $paketView = DB::table('paket')
                        ->orderBy('id_paket', 'asc')
                        ->get();
        return view('data-paket', ['view' => $paketView]);
    }

    public function paketPostData(Request $request)
    {
        //dd($request->except(['_token', 'addLaundryData']));
        //Cucian::create($request->all()); 
        Paket::create($request->except(['_token', 'addPackageData','updated_at','created_at'])); 
        return redirect('/blue-springs-laundry/data-paket'); 
    }

    public function paketEditData($id_paket,Request $request)
    {
        //dd(Paket::find($id_paket));
        $paketUpdate = Paket::find($id_paket);
        $paketUpdate->update($request->except(['_token', 'updatePackageData','updated_at','created_at']));
        return redirect('/blue-springs-laundry/data-paket'); 
    }

    public function paketDeleteData($id_paket,Request $request)
    {
        //dd(Cucian::find($id_cucian));
        $paketDelete = Paket::find($id_paket);
        $paketDelete->delete($request->except(['_token', 'deletePackageData','updated_at','created_at']));
        return redirect('/blue-springs-laundry/data-paket'); 
    }
}
