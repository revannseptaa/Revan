<?php

namespace App\Http\Controllers\Transaksi;

use App\Permintaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InController extends Controller
{
    public function index()
    {
        $permintaans = Permintaan::where('status','in')->paginate(5);
        return view('transaksi.in.index', compact('permintaans'));
    }
    public function update(Request $request, Permintaan $permintaans)
    {
        // $category = Category::findOrFail($id);
        $permintaans->update($request->all());
        // $category->update(['nama' => $request->nama]);

        return view('transaksi.out.index', compact('permintaans'));
    }
    public function destroy(Request $request, $id)
    {
        $permintaans = Permintaan::findOrFail($id);
        $permintaans->delete($request->all());

        return redirect()->route('transaksi.in');
    }
    public function store(Request $request, $id)
    {
        $permintaans = Permintaan::findOrFail($id);

        return redirect()->route('transaksi.out');
}
}