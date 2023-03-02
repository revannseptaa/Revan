@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>
    <div class="card border-0">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Categorys</th>
                        <th>Nama Barang</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cupboards as $cupboard)
                        <tr>
                            <td>{{$cupboard->no_reg}}</td>
                            <td>{{$cupboard->nama}}</td>
                            <td>
                                <form action="" method="post">
                                    @csrf
                                    @role('gudang|pimpinan')
                                    <a href="{{route('master-barang.show', $cupboard->id)}}" class="btn btn-outline-secondary btn-sm">
                                        update stock
                                    </a>
                                    <a href="{{route('rak.barang', $cupboard->id)}}" class="btn btn-outline-secondary btn-sm">
                                        Tampilkan Stock
                                    </a>
                                    @endrole
                                    @role('customer')
                                    <a href="{{route('rak.barang', $cupboard->id)}}" class="btn btn-outline-warning btn-sm">
                                        Buat Permintaan
                                    </a>
                                    @endrole
                                </form>
                            </td>
                        </tr>
                    @empty

                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
