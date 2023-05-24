<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cucian;
use Illuminate\Support\Collection;

class CucianController extends Controller
{
    public function viewcucianclass()
    {
        $cucianView = DB::table('cucian')
                        ->orderBy('id_cucian', 'asc')
                        ->get()
                        ->collect();

        $cucianViewuser = DB::table('user')
                        ->orderBy('id_pelanggan', 'asc')
                        ->get();

        $cucianViewpaket = DB::table('paket')
                        ->orderBy('id_paket', 'asc')
                        ->get();

        $dashboardjoin = DB::table('cucian')
                        ->join('user', 'user.id_pelanggan', '=', 'cucian.id_pelanggan')
                        ->join('paket', 'cucian.id_paket', '=', 'paket.id_paket')
                        ->select('user.username', 'user.nama','cucian.id_pelanggan', 'paket.id_paket', 'paket.nama_paket','paket.harga','cucian.id_cucian',
                        'cucian.baju','cucian.celana','cucian.pakaian_dalam',
                        'cucian.celana_pendek','cucian.rok','cucian.sepatu',
                        'cucian.pakaian_anak','cucian.handuk','cucian.selimut',
                        'cucian.banyak_cucian','cucian.status')
                        ->get();
        return view('cucian', ['viewpaket' => $cucianViewpaket,
        'viewuser' => $cucianViewuser,
        'view' => $cucianView,
        'join' => $dashboardjoin
    ]);
    
    }

    public function cucianPostData(Request $request)
    {
        //dd($request->except(['_token', 'addLaundryData']));
        //Cucian::create($request->all()); 
        Cucian::create($request->except(['_token', 'addLaundryData','updated_at','created_at'])); 
        return redirect('/blue-springs-laundry/data-cucian'); 
    }

    public function cucianEditData($id_cucian,Request $request)
    {
        //dd(Cucian::find($id_cucian));
        $cucianUpdate = Cucian::find($id_cucian);
        $cucianUpdate->update($request->except(['_token', 'updateLaundryData','updated_at','created_at']));
        return redirect('/blue-springs-laundry/data-cucian'); 
    }

    public function cucianDeleteData($id_cucian,Request $request)
    {
        //dd(Cucian::find($id_cucian));
        $cucianDelete = Cucian::find($id_cucian);
        $cucianDelete->delete($request->except(['_token', 'deleteLaundryData','updated_at','created_at']));
        return redirect('/blue-springs-laundry/data-cucian'); 
    }
    
}
