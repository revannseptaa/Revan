<?php

namespace App\Http\Controllers\Transaksi;

use App\Permintaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InController extends Controller
{
    public function index()
    {
        $permintaans = Permintaan::with('barang')->where('status','in')->paginate(5);
        return view('transaksi.in.index', compact('permintaans'));
    }
}