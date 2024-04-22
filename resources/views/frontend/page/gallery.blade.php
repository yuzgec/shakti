@extends('frontend.app.master')
@section('content')
<section id="home" class="relative white height-40vh height-60vh-sm align-items-center d-flex" data-bg="url(/header-bg.jpg)">
    <div class="container-md">
        <div class="t-center">
            <h5 class="fs-11 ls-4 semibold white uppercase">
                Shakti Komala
            </h5>
            <h1 class="mt-15 bold ls--1 ls-0-sm lh-md">
                Foto Galeri
            </h1>
        </div>
    </div>

    <div class="absolute bottom-0 fullwidth align-items-center d-flex move-down-half">
        <div class="container relative zi-1">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 radius-lg px-50 px-30-sm py-15 fs-11 fs-10-sm t-center white ls-08 bold uppercase bs-colored" data-bgcolor="#006533">
                    <div class="row row-eq-height align-items-center justify-content-lg-between justify-content-center">
                        <div class="col-auto">
                            <p class="t-left t-center-sm bold fs-11">Shakti Komala - Aile Dizilimi</p>
                        </div>
                        <div class="col-auto t-right t-center-sm mt-10-sm">
                            <a href="index.html"><i class="ti-home"></i></a>
                            <i class="ti-angle-right fs-7 mx-15 mx-5-sm"></i>
                            <a href="{{ route('home')}}">Anasayfa</a>
                            <i class="ti-angle-right fs-7 mx-15 mx-5-sm"></i>
                            <a href="#" class="stay c-default">Foto Galeri</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection