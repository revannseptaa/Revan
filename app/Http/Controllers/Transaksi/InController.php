<?php

namespace App\Http\Controllers\Transaksi;

use App\Barang;
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
    // public function update(Request $request, Permintaan $permintaans)
    // {
    //     // $category = Category::findOrFail($id);
    //     $permintaans->update($request->all());
    //     // $category->update(['nama' => $request->nama]);

    //     return view('transaksi.out.index', compact('permintaans'));
    // }
    public function destroy(Request $request, $id)
    {
        $permintaans = Permintaan::findOrFail($id);
        $permintaans->delete($request->all());

        return redirect()->route('transaksi.in');
    }
    // public function store(Pemintaan $permintaans ,Request $request)
    // {

    //     $permintaans = Permintaan::create(
    //         $request->all()
    //     );

    //     return view('transaksi.out.index', compact('permintaans'));
    // }
    // public function store(Permintaan $permintaans ,Request $request)
    // {

    //     Permintaan::create([
    //         'id'               => $permintaans->id,
    //         'barang_id'        => $barang->id,
    //         'kode_permintaan'  => $request->kode_permintaan,
    //         'jumlah'           => $request->jumlah,
    //         'total'            => $request->total,
    //         'status'           => $request->satus,
    //         'tanggal_pengajuan' => now(),
    //     ]);

    //     flash('permintaan berhasil di ajukan')->success();
    //     return redirect()->route('transaksi.out.index', compact('permintaans'));
    // }
    public function store(Request $request, Permintaan $permintaans)
    {

        $permintaans = Permintaan::create(
            $request->all()
        );

        return redirect()->route('transaksi.out');

 }
    // public function update(UpdateTransakiRequest $request, Permintaan $permintaans)
    // {
    //     $barang = Barang::findOrFail($permintaans->barang_id);

    //     $permintaans->update([
    //         'status' => 'approved',
    //         'tanggal_persetujuan' => now(),
    //     ]);
    //     if ($transaksi->save()) {
    //         $hitung = $barang->stock - $permintaans -> jumlah;

    //         $barang->update([
    //            'stock' => $hitung
    //         ]);
    //     }
    //     // return redirect ()->back()->with('succesful', 'Permintaan Berhasil Disetujui');
    //     return redirect()->route('transaksi.out');

    // }

}
