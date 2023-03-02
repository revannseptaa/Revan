@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page">Edit Brand</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Brand</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <button class="btn btn-outline-info">Simpan Brand</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Brand</th>
                                <th>Nama Brand</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>BRND/20220403/001</td>
                                <td>Kawasaki</td>
                                <td>
                                    <form action="" method="post">
                                        @csrf
                                        <a href="{{route('brand.edit')}}" class="btn btn-outline-warning btn-sm">Edit
                                            Brand</a>
                                        <button class="submit btn btn-outline-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection