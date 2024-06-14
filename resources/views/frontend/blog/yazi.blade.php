@extends('frontend.app.master')
@section('content')
<section id="home" class="relative white height-40vh height-60vh-sm align-items-center d-flex" data-bg="url(/header-bg.jpg)">
    <div class="container-md">
        <div class="t-center">
            <h5 class="fs-11 ls-4 semibold white uppercase mt-100">
                {{ $Detay->seo_key}}
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
                            <p class="t-left t-center-sm bold fs-11">{{ $Detay->title .' - ' . $Detay->seo_key}}</p>
                        </div>
                        <div class="col-auto t-right t-center-sm mt-10-sm">
                            <a href="index.html"><i class="ti-home"></i></a>
                            <i class="ti-angle-right fs-7 mx-15 mx-5-sm"></i>
                            <a href="{{ route('home')}}">Anasayfa</a>
                            <i class="ti-angle-right fs-7 mx-15 mx-5-sm"></i>
                            <a href="{{ route('yazilar')}}" class="">Yazılar</a>
                            <i class="ti-angle-right fs-7 mx-15 mx-5-sm"></i>
                            <a href="#" class="stay c-default">{{ $Detay->title}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container mt-100">
    <!-- Row for sticky item & container -->
    <div class="row">
        <!-- Col -->
        <div class="col-lg-4 col-12">
            <!-- Keeper for sticky element -->
            <div class="sticky-keeper">
                <!-- Sticky container - you can edit top spacing and container to fix. -->
                <div
                    class="sticky-container before-cont"
                    data-top-spacing="70"
                    data-fix-container="#container1"
                    style="top: 0px; position: absolute; max-width: 416px;">
                    <img src="{{ (!$Detay->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $Detay->getFirstMediaUrl('page')}}" class="img-fluid" alt="{{ $Detay->title}}"/>

                </div>
            </div>
            <!-- End keeper for sticky element -->
        </div>
        <!-- End col -->
        <!-- Col -->
        <div id="container1" class="col-lg-8 col-12 fs-20 gray7 light">
            {!! $Detay->desc!!}
        </div>
        <!-- End col -->
    </div>
    <!-- End row for sticky item & container -->
</div>
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