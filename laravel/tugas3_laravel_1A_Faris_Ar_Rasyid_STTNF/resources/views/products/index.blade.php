@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col-ld-12 margin-tb">
        <div class="pull-left">
            <h3>Daftar Produk</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('route('products.create') }}"> Tambah Produk</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert a;ert-success">
    <p>{{ $message }}</p>
</div>
@endif
<br />
<table class="table table-success table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Detail Produk</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"
                    tittle="Lihat Detail Data Produk">
                    <i class="bi bi-eye"></i>
                </a>
                <i class="bi bi-pencil-square"></i>
                <i class="bi bi-trash"></i>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>