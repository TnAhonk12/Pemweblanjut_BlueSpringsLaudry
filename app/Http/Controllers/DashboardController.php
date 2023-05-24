<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function dashboardclass()
    {
        $dashboardjoin = DB::table('user')
                ->join('cucian', 'user.id_pelanggan', '=', 'cucian.id_pelanggan')
                ->join('paket', 'cucian.id_paket', '=', 'paket.id_paket')
                ->join('transaksi', 'cucian.id_cucian', '=', 'transaksi.id_cucian')
                ->select('user.username', 'user.nama', 'paket.nama_paket','paket.harga','transaksi.id_cucian','cucian.id_pelanggan','cucian.status')
                ->get();
        return view('dashboard', ['join' => $dashboardjoin]);
    }
}
