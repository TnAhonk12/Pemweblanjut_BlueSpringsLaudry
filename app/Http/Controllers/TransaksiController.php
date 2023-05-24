<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use Illuminate\Support\Collection;

class TransaksiController extends Controller
{
    public function viewtransaksiclass()
    {
        $transaksiView = DB::table('transaksi')
                        ->orderBy('id_transaksi', 'asc')
                        ->get();

        $transaksicreatejoin = DB::table('cucian')
                        ->leftJoin('user', 'user.id_pelanggan', '=', 'cucian.id_pelanggan')
                        ->select('user.username','user.nama', 'cucian.id_cucian')
                        ->get();
                                    
        $transaksieditjoin = DB::table('cucian')
                        ->leftJoin('user', 'user.id_pelanggan', '=', 'cucian.id_pelanggan')
                        ->select('user.username','user.nama','cucian.id_cucian')
                        ->get();
                                    
        $transaksideletejoin = DB::table('cucian')
                        ->leftJoin('user', 'user.id_pelanggan', '=', 'cucian.id_pelanggan')
                        ->select('user.username','user.nama','cucian.id_cucian')
                        ->get();
                                  
        return view('data-transaksi', ['view' => $transaksiView],
                                      ['createTransaksi' => $transaksicreatejoin],
                                      ['editTransaksi' => $transaksieditjoin],
                                      ['deleteTransaksi' => $transaksideletejoin]
                                      
    );
    }

    public function transaksiPostData(Request $request)
    {
        //dd($request->except(['_token', 'addLaundryData']));
        //Cucian::create($request->all()); 
        Transaksi::create($request->except(['_token', 'addTransactionData','updated_at','created_at'])); 
        return redirect('/blue-springs-laundry/data-transaksi'); 
    }

    public function transaksiEditData($id_transaksi,Request $request)
    {
        //dd(Paket::find($id_paket));
        $transaksiUpdate = Transaksi::find($id_transaksi);
        $transaksiUpdate->update($request->except(['_token', 'updateTransactionData','updated_at','created_at']));
        return redirect('/blue-springs-laundry/data-transaksi'); 
    }

    public function transaksiDeleteData($id_transaksi,Request $request)
    {
        //dd(Transaksi::find($id_transaksi));
        $transaksiDelete = Transaksi::find($id_transaksi);
        $transaksiDelete->delete($request->except(['_token', 'deleteTransactionData','updated_at','created_at']));
        return redirect('/blue-springs-laundry/data-transaksi'); 
    }
}
