@extends('layouts_2.index')
@section('content')
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Mahasiswa</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Mahasiswa</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
        <h3 class="text-center">Daftar Mahasiswa</h3>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $m)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$m->nim}}</td>
                    <td>{{$m->nama}}</td>
                    <td>{{$m->alamat}}</td>
                    <td>{{$m->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</section>
@endsection