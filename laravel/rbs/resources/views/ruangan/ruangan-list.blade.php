@extends('landingpage.index')
@section('content')
<!-- Our Room Area Start -->
<section class="roberto-rooms-area">
    <div class="rooms-slides owl-carousel">
        <!-- looping data gedung -->
        @foreach($gedungs as $g)
        <div class="single-room-slide d-flex align-items-center">
            <!-- Thumbnail -->
            <div class="room-thumbnail h-100 bg-img"
                style="background-image: url({{ asset('img/gedung/'.$g->foto) }});">
            </div>

            <!-- Content -->
            <div class="room-content">
                <h2 data-animation="fadeInUp" data-delay="100ms">{{ $g->nama }}</h2>
                <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                    <li><span><i class="fa fa-check"></i> Kode</span> <span>: {{ $g->kode }}</span></li>
                    <li><span><i class="fa fa-check"></i> Alamat</span> <span>: {{ $g->alamat }}</span></li>}}
                </ul>
                <a href="#" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- Our Room Area End -->
@endsection