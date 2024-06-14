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
                            <p class="t-left t-center-sm bold fs-11">Shakti Komala - Aile Dizilimi</p>
                        </div>
                        <div class="col-auto t-right t-center-sm mt-10-sm">
                            <a href="index.html"><i class="ti-home"></i></a>
                            <i class="ti-angle-right fs-7 mx-15 mx-5-sm"></i>
                            <a href="{{ route('home')}}">Anasayfa</a>
                            <i class="ti-angle-right fs-7 mx-15 mx-5-sm"></i>
                            <a href="#" class="stay c-default">Kalbine Köklen</a>

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
                    <h6 class="ls-5 uppercase colored fs-11">Sticky Item</h6>
                    <p class="gray7 light fs-18 mt-15 lh-30">
                        This is a Sticky element. It was fixed to the right-container and 70 pixels of
                        space were added from top. You can change all settings from the "data"
                        attributes as desired.
                    </p>
                </div>
            </div>
            <!-- End keeper for sticky element -->
        </div>
        <!-- End col -->
        <!-- Col -->
        <div id="container1" class="col-lg-8 col-12 fs-20 gray7 light">
            <p class="light lh-35">
                Donec posuere, purus vel maximus rhoncus, tellus est auctor tortor, a ultrices
                mi lorem et sapien. Suspendisse potenti. Pellentesque accumsan elit lorem, ac
                placerat ligula suscipit in. Curabitur vehicula tellus at risus vestibulum
                consectetur. Nam blandit enim felis, eu tincidunt justo lobortis eget. Sed sit
                amet vulputate nunc, sed pharetra justo. Vestibulum consequat nec dolor id
                convallis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut leo
                augue, porttitor a pretium quis, hendrerit vel urna. Fusce euismod nisl urna, et
                dignissim dui viverra et. Nullam tincidunt ex vitae varius pretium. Donec
                sodales fringilla fringilla. Suspendisse euismod euismod ullamcorper. Donec
                condimentum velit magna, eget volutpat urna rhoncus vitae.
            </p>
            <p class="mt-15 light lh-35">
                Aenean tempor, tortor ut egestas gravida, dolor tortor sagittis leo, eu placerat
                nisi nibh sit amet justo. Cras sit amet diam in mauris luctus faucibus et sit
                amet mauris. Pellentesque turpis neque, accumsan at interdum id, ultrices sit
                amet felis. Duis ut convallis libero. Fusce eu tincidunt dolor. Phasellus non
                sollicitudin neque, eu tempor nisl. Vestibulum lacinia elit a lorem faucibus, at
                viverra ligula tristique. Vivamus maximus, quam sit amet lobortis fringilla,
                nibh erat malesuada neque, nec malesuada erat urna id ipsum. Sed id commodo
                dolor, at sodales magna. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Quisque scelerisque turpis nulla, vel ullamcorper eros lacinia sit amet.
                Fusce sed magna fermentum, eleifend lectus vitae, elementum neque. Fusce
                efficitur molestie ligula et luctus. Curabitur venenatis sed velit non
                elementum. Mauris elementum urna mi, ut tristique ipsum sodales eget.
            </p>
            <p class="mt-15 light lh-35">
                Etiam ut magna metus. Aliquam ultrices lacinia turpis, sit amet lacinia ligula
                dignissim eu. Fusce quis est justo. Sed non mauris vitae lacus venenatis
                sollicitudin sed non lacus. Praesent tristique faucibus ipsum vitae elementum.
                Donec dolor diam, tincidunt non ante facilisis, pulvinar maximus mi. Donec
                posuere turpis urna, non fringilla risus vehicula a. Proin quis sapien
                consequat, tristique lorem eu, venenatis tortor. Nulla semper volutpat auctor.
                Donec non congue libero. Vivamus gravida, augue vel lacinia venenatis, leo lacus
                posuere erat, sed interdum dui dui eu erat. Donec ac malesuada dolor.
            </p>
            <p class="mt-15 light lh-35">
                Fusce quis tellus erat. Nulla facilisi. Integer hendrerit urna dui, at auctor
                ligula dictum id. Nunc erat sem, euismod ut diam tempus, auctor volutpat nisi.
                In feugiat enim ut arcu accumsan, at suscipit tellus ullamcorper. Cras facilisis
                varius dolor, sed convallis massa placerat non. Integer orci lacus, faucibus vel
                ante vitae, lacinia finibus eros. In eget sem sed eros tempus cursus et sit amet
                dolor. Morbi ut viverra orci, a lacinia massa. Ut ut mollis mauris. Ut sed
                ornare quam. Vivamus interdum tortor posuere, mattis orci in, hendrerit nunc.
            </p>
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