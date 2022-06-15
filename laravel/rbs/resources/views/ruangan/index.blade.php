@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between my-3">
        <h3>Data Ruangan</h3>
        <a href="{{ route('ruangan.create') }}" type="button" class="btn btn-primary btn-sm btn-icon-text mr-3">
            Tambah
            <i class="typcn typcn-plus btn-icon-append"></i>
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive pt-3">
                    <table class="table table-striped project-orders-table">
                        <thead>
                            <tr>
                                <th class="ml-5">No</th>
                                <th>Nama Ruangan</th>
                                <th>Kategori Ruangan</th>
                                <th>Gedung</th>
                                <th>Kapasitas</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ruangan as $r)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $r->nama }}</td>
                                <td>{{ $r->kategoriRuangan->nama }}</td>
                                <td>{{ $r->gedung->nama }}</td>
                                <td>{{ $r->kapasitas }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                            Edit
                                            <i class="typcn typcn-edit btn-icon-append"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                            Delete
                                            <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection