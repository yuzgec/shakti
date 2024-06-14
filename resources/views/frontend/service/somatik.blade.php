@extends('frontend.app.master')
@section('content')
<section id="home" class="relative white height-40vh height-60vh-sm align-items-center d-flex" data-bg="url(/header-bg.jpg)">
    <div class="container-md">
        <div class="t-center">
            <h5 class="fs-11 ls-4 semibold white uppercase mt-100">
                Shakti Komala
            </h5>
            <h1 class="mt-15 bold ls--1 ls-0-sm lh-md">
                {{ $Detay->title}}
            </h1>
        </div>
    </div>

    <div class="absolute bottom-0 fullwidth align-items-center d-flex move-down-half">
        <div class="container relative zi-1">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 radius-lg px-50 px-30-sm py-15 fs-11 fs-10-sm t-center white ls-08 bold uppercase bs-colored" data-bgcolor="#006533">
                    <div class="row row-eq-height align-items-center justify-content-lg-between justify-content-center">
                        <div class="col-auto">
                            <p class="t-left t-center-sm bold fs-11">Shakti Komala - Somatik Yas</p>
                        </div>
                        <div class="col-auto t-right t-center-sm mt-10-sm">
                            <a href="{{ route('home')}}"><i class="ti-home"></i></a>
                            <i class="ti-angle-right fs-7 mx-15 mx-5-sm"></i>
                            <a href="{{ route('home')}}">Anasayfa</a>
                            <i class="ti-angle-right fs-7 mx-15 mx-5-sm"></i>
                            <a href="{{ route('somatikyas')}}" class="stay c-default">Somatik Yas</a>

                            <i class="ti-angle-right fs-7 mx-15 mx-5-sm"></i>
                            <a href="#" class="stay c-default">{{ $Detay->title}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="home" class="fullwidth bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-12 pt-50">
                <div class="fs-16 fs-16-sm gray7 ls-0 lh-35 light">
                    @if($Detay->getFirstMediaUrl('page'))
                    <img src="{{ (!$Detay->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $Detay->getFirstMediaUrl('page')}}" class="img-fluid mb-20" alt="{{ $Detay->title}}"/>
                    @endif
                    {!! $Detay->desc !!}
                </div>
            </div>
            <div class="col-md-3 col-12 bg-gray">   
                <div
                    class="fs-15 gray8  lh-lg mb-30  px-15-sm py-50 py-20-sm">
                    <h4 class="fs-17 black">KALBİNE KÖKLEN</h4>
                    @foreach ($Service->where('category', 1) as $item)
                    <a
                        href="{{ route('service', $item->slug)}}" title="{{ $item->title}}"
                        class=" py-15 bb-1 b-gray1 colored-hover d-flex align-items-center justify-content-between">
                        <span class="fs-inherit color-inherit"><i class="fas fa-angle-right"></i> {{ $item->title }}</span>
                    </a>
                    @endforeach
                </div>
            </div>  

        </div>
   

    </div>
</section>

<section id="portfolio-grid" class="pb-60 pt-50 bt-1 b-gray1 b-solid lightbox_gallery">
    <div class="container ">
  
        <div id="portfolio-items" class="">
            @foreach ($Detay->getMedia('gallery') as $item)
            <a href="{{ $item->getUrl() }}" class="cbp-item art photography d-block has-overlay-hover">
                <div class="work-image">
                    <img src="/front/images/image_loader.svg" data-cbp-src="{{ $item->getUrl() }}" 
                    width="500" height="500" alt="{{ $Detay->title}}">
                    <div class="overlay-hover bg-soft-dark4 d-flex align-items-center justify-content-center scale-hover-container slow">
                        <i class="ti-plus fs-20 white scale-hover"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('customJS')
<script>
    (function($, window, document, undefined) {
        'use strict';
        $('#portfolio-items').cubeportfolio({
            mediaQueries: [{
                width: 992,
                cols: 3,
            }, {
                width: 640,
                cols: 2,
            }, {
                width: 480,
                cols: 1,
            }],
            filters: '.filter-tags',
            defaultFilter: '*',
            layoutMode: 'masonry',
            gridAdjustment: 'responsive',
            gapHorizontal: 10,
            gapVertical: 10,
            caption: 'none',
            animationType: 'quicksand',
            displayType: 'none',
            displayTypeSpeed: 0,
        });


    })(jQuery, window, document);
</script>
    
@endsection