@extends('frontend.app.master')
@section('content')
<section id="home" class="relative white height-40vh height-60vh-sm align-items-center d-flex" data-bg="url(/header-bg.jpg)">
    <div class="container-md">
        <div class="t-center">
            <h5 class="fs-11 ls-4 semibold white uppercase">
                Shakti Komala
            </h5>
            <h1 class="mt-15 bold ls--1 ls-0-sm lh-md">
                Hakkımda
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
                            <a href="#" class="stay c-default">Hakkımda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="elementDescription" class="container py-100 py-100-sm">

    <div class="fs-16 fs-16-sm gray7 ls-0 lh-35 light">
        {!! $Detay->desc !!}
    </div>

</div>

<section id="service-boxes-02" class="pt-30 pb-60 bg-gray2 bt-1 b-gray1">
    <div class="container">

        <div class="col t-center">
            <h2 class="lh-45 mt-10 uppercase">Stüdyolarımız</h2>
            <p class="light gray6 mt-15 lh-30 fs-18">Karşıyaka <b class="font-bold">YOLO Fitness </b>stüdyolarını aşağıdan inceleyebilirsiniz.</p>
        </div>

        <div class="row t-left t-center-sm align-items-center">
            @foreach ($Service->where('category', 2) as $item)
            <div class="col-lg-4 col-12 mt-30 perspective-lg relative zi-hover">
                <div class="bg-white bs-lg-hover dark2 slow c-default py-40 px-40">
                    <h5 class="fs-18 medium mt-25">
                        <a href="{{ route('service', $item->slug)}}" title="{{ $item->title}}">
                            {{ $item->title}}
                        </a>
                    </h5>
                    <div class="fs-16 lh-25 mt-15 light">
                    {!! $item->short !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection