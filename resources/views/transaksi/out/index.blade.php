@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Transaksi</li>
            <li class="breadcrumb-item active" aria-current="page">Barang Keluar</li>
        </ol>
    </nav>
    <div class="card border-0">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Refrensi</th>
                        <th>Supplier</th>
                        <th>Quantity</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($permintaans as $permintaan)
                        <tr>
                            <td>{{$permintaan->koe_permintaan}}</td>
                            <td>{{$permintaan->barang->brand->nama}}</td>
                            <td>{{$permintaan->jumlah}}</td>
                            <td>{{$permintaan->created_at}}</td>
                            <td>{{$permintaan->total}}</td>
                            @role('gudang')
                            @if ($permintaan->status !== 'in')
                            <td class="d-flex">
                                <form action="" method="post">
                                    @csrf
                                    <button class="btn btn-outline-info btn-sm">Setujui</button>
                                </form>
                                <form action="" method="post">
                                    @csrf
                                    <button class="btn btn-outline-danger btn-sm ml-2">Tolak</button>
                                </form>
                            </td>
                            @endif
                            @endrole
                        </tr>
                        @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
