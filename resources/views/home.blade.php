@extends('app')

@section('content')
    <!-- Hero Section -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/image.jpg" class="d-block w-100 image_carousel" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/jurnal.jpg" class="d-block w-100 image_carousel" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/meditation.jpg" class="d-block w-100 image_carousel" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <!--Start Procedures area-->
    <section class="procedures-area">
        <div class="arrow">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARgAAAAnAQAAAAD8rmrtAAAAAnRSTlMAAHaTzTgAAAAUSURBVDjLY2AYBaNgFIyCUUBvAAAFfAAB4cUovAAAAABJRU5ErkJggg=="
                alt=""
                data-src="https://yourmentalhealthpal.com/wp-content/themes/yourmentalhealthpal/images/arrow.png"
                decoding="async" class="lazyload" data-eio-rwidth="280" data-eio-rheight="39">
            <noscript>
                <img src="https://yourmentalhealthpal.com/wp-content/themes/yourmentalhealthpal/images/arrow.png"
                    alt="" data-eio="l">
            </noscript>
        </div>
        {{-- <div class="iconbox-left-top">
            <span class="flaticon-light"></span>
        </div>
        <div class="iconbox-left-bottom">
            <span class="flaticon-flower"></span>
        </div>
        <div class="iconbox-right-top">
            <span class="flaticon-nature"></span>
        </div>
        <div class="iconbox-right-bottom">
            <span class="flaticon-left"></span>
        </div> --}}
        <div class="container">
            <div class="sec-title text-center">
                <h1>How Are You Feeling Today</h1>
                <div class="border mar0auto">
                    <span class="flaticon-shape"></span>
                </div>
            </div>
            <div class="d-flex aligns-items-center justify-content-center">
                <div>
                    <div class="row">
                        <div class="card text-black mt-3 mx-3" style="max-width: 10rem; min-height:10rem;">
                            <div class="card-body">
                                <h5 class="card-title">Primary card title</h5>
                            </div>
                        </div>
                        <div class="card text-black mt-3 mx-3" style="max-width: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">Secondary card title</h5>
                            </div>
                        </div>
                        <div class="card text-black mt-3 mx-3" style="max-width: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">Success card title</h5>
                            </div>
                        </div>
                        <div class="card text-black mt-3 mx-3" style="max-width: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">Danger card title</h5>
                            </div>
                        </div>
                        <div class="card text-black mt-3 mx-3" style="max-width: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">Warning card title</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
