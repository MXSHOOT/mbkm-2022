@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Input Gedung</h4>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('gedung.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control" placeholder="Kode Gedung">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Gedung</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Gedung">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="foto" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" name="proses">Simpan</button>
                        <a href="{{ url('gedung') }}" class="btn btn-success">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection