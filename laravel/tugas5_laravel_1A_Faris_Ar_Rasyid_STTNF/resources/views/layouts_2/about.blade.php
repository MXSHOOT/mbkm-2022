@extends('layouts.index')
@section('content')
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">About Us</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">About</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color">About Us <br>SIMPERU<br>Sistem Peminjaman Ruangan</h2>
                    <p>SIMPERU adalah aplikasi untuk melakukan peminjaman ruangan secara online tanpa perlu ke tempat nya.</p>
                    <a href="{{ url('') }}" class="button_hover theme_btn_two">Request</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="image/gallery/03-1.jpg" alt="img">
            </div>
        </div>
    </div>
</section>
<!--================ About History Area  =================-->
@endsection