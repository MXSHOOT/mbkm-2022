@extends('layouts.index')
@section('content')
<div class="card">
    <div class="card-body">
        <h1>Welcome to Laravel 8</h1>
        <hr />
        Selamat Belajar Laravel 8, Semoga Sukses
    </div>
    <!-- start -->
        <!-- For demo purpose -->
        <div class="container py-5">
            <div class="row text-center text-black">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4">Materi</h1>
                    <p class="lead mb-0">Menggunakan Bootstrap 4 untuk grid dan utilities, referensi Snippet.</p>
                    <p class="lead">Snippet by<a href="https://bootstrapious.com/snippets" class="text-black">
                        <u>Bootstrapious</u></a>
                    </p>
                </div>
            </div>
        </div><!-- End -->


        <div class="container">
            <div class="row text-center">

                <!-- Team item -->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://www.webhozz.com/blog/wp-content/uploads/2019/05/13.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">HTML dan CSS</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <a href="{{ url('/html') }}"><button class="btn btn-primary" type="button">Button</button></a>
                        </div>
                    </div>
                </div><!-- End -->

                <!-- Team item -->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://1000logos.net/wp-content/uploads/2020/09/JavaScript-Logo.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">JS</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div>
                </div><!-- End -->

                <!-- Team item -->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://i0.wp.com/surabaya.proxsisgroup.com/wp-content/uploads/2018/02/logo-php-mysql.png?w=500&ssl=1" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">PHP MYSQL</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div>
                </div><!-- End -->

                <!-- Team item -->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">PHP</h5><span class="small text-uppercase text-muted">PHP</span>
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div>
                </div><!-- End -->
                <!-- Team item -->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Laravel</h5><span class="small text-uppercase text-muted">PHP</span>
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div>
                </div><!-- End -->
            </div>
        </div>
    <!-- end -->
</div>
@endsection