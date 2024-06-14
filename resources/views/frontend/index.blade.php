@extends('frontend.app.master')
@section('customCSS')

@endsection

@section('content')

@include('frontend.app.slider')   
<div class="container">
    <div class="card bg-white" style="position: absolute;z-index:9999999999999999;top:53%;left:%;width:30%" style="background:green">
    <div class="card-body p-5" >
        <h2 class="text-color-secondary font-weight-bold text-7 line-height-1 mb-1">Abone Olun</h2>
        <p class="custom-font-secondary text-4 pb-1 mb-4">Email Adresinizi girerek etkinlik ve haberlerden ilk siz haberdar olun.</p>
        <form action="" method="POST">
         
            <div class="row">
                <div class="form-group col pb-1 mb-3">
                    <input type="text"  maxlength="100" class="form-control" name="name" placeholder="Adınız Soyadınız" required="">
                </div>
            </div>
            <div class="row">
                <div class="form-group col pb-1 mb-3">
                    <input type="email"  class="form-control" name="phone" placeholder="Email Adresiniz" required="">
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col">
                    <a
                        href="#"
                        class="lg-btn bg-gradient3 hover-cursor white fs-11 bold uppercase slow-sm bs-colored">
                        <span class="cursor-container">
                            <span
                                class="cursor hiding"
                                style="display: none; transform: translate3d(1214px, 305px, 0px) translateZ(0px);">
                                <span class="c-inner"></span>
                            </span>
                        </span>
                        ABONE OL
                    </a>                   
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<section id="about" class="mt-30 relative">
    <!-- Container for all -->
    <div class="container">
        <!-- Row for both cols -->
        <div class="row align-items-end">
            <!-- Image -->
            <div class="col-lg-5 offset-lg-0 col-sm-6 offset-sm-3 px-50 px-15-sm">
                <img
                    src="/shaktikomala-1.jpg"
                    alt=""
                    class="d-block fullwidth"></div>
                <!-- Texts -->
                <div
                    class="col-lg-6 offset-lg-0 col-sm-10 col-xs-12 offset-sm-1 offset-xs-0 pl-50 pl-15-sm relative mt-70-sm">
                    <!-- Text on bg with tertiary font -->
                    <div
                        class="absolute fs-60 fs-50-sm font-tertiary move-left-half move-none-sm ml-200 mt--50 ml-0-sm nowrap zi-0 unselectable"
                        data-color="#006533"
                        style="color: rgb(0, 0, 0);">
                        Skahti Komala ile Kalbine Köklen
                    </div>
                    <!-- Title and texts -->
                    <div class="relative zi-2">
                        <!-- Title -->
                        <h1 class="fs--sm lh-md lh-40-sm ls--2 ls--05-sm bold font-secondary gray8">
                            BURAYA SLOGAN VEYA BENZERİ BİR METİN GELECEK
                        </h1>
                        <!-- Paragraph -->
                        <p class="fs-20 gray8 lh-35 mt-30">
                            Fondue cheese strings cheeseburger. Fromage dolcelatte manchego halloumi
                            macaroni cheese taleggio port-salut who moved my cheese. Cut the cheese
                            jarlsberg brie when the cheese comes out every body's happy cheeseburger
                            mascarpone cow cream cheese.
                            <span class="bg-colored px-7 py-5 white font-secondary">Jarlsberg manchego goat parmesan cheese slices edam stilton croque monsieur.</span>
                            When the cheese comes out everybody's happy ricotta caerphilly cheese triangles.
                        </p>
                        <!-- Button -->
                        <a
                            href="{{ route('contactus')}}" title="İletişime Geç"
                            class="mt-50 lg-btn py-15-sm px-20-sm bg-colored white fs-18 fs-15-sm bg-colored1-hover slow-sm">
                            İLETİŞİME GEÇ
                        </a>
                    </div>
                    <!-- End Title and texts -->
                </div>
                <!-- End all texts -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
{{-- <div class="container mt-40 mb-40">
    <div class="row">
        <div class="col-md-8">
            <h6 class="colored fs-11 ls-6 uppercase">Shakti Komala Sitesine Hoş Geldiniz</h6>
            <h1 class="lh-40 font-sedgwick mt-10">KALBİNE KÖKLEN</h1>
            <p class="light fs-20 gray7 lh-35 mt-30">
               {!!$About->short!!}
            </p>
        </div>
        <div class="col-md-4">
            <img src="/logoc.png" alt="Shakti Komala" class="img-fluid">
        </div>
    </div>
</div> --}}


<section
id="services"
class="services pb-100 mt-50"
data-bg="url(/front/content/lifestyle/images/decorative.svg)"
data-was-processed="true"
style="background-image: url('/front/content/lifestyle/images/decorative.svg';);">
<div class="container">
    <div class="row px-20 px-0-sm">
        <div class="mt-20 col-lg-4 col-md-6 col-sm-6 col-xs-12 pr-50 px-15-sm">
          
            <h4 class="mt-40 font-secondary bold fs-18 gray8">
                AİLE DİZİLİMİ
            </h4>
            <!-- Description -->
            <p class="mt-15 fs-18 gray6 lh-30">
                Açıklama yazısı gelecek... Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                 Autem nostrum iure, laudantium necessitatibus
            </p>
        </div>
        <div class="mt-20 col-lg-4 col-md-6 col-sm-6 col-xs-12 pr-50 px-15-sm">
          
            <h4 class="mt-40 font-secondary bold fs-18 gray8">
                SİNİR SİSTEMİ SEANSLARI
            </h4>
            <!-- Description -->
            <p class="mt-15 fs-18 gray6 lh-30">
                Açıklama yazısı gelecek... Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                 Autem nostrum iure, laudantium necessitatibus
            </p>
        </div>
        <div class="mt-20 col-lg-4 col-md-6 col-sm-6 col-xs-12 pr-50 px-15-sm">
          
            <h4 class="mt-40 font-secondary bold fs-18 gray8">
                MEDİTASYONLAR
            </h4>
            <!-- Description -->
            <p class="mt-15 fs-18 gray6 lh-30">
                Açıklama yazısı gelecek... Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                 Autem nostrum iure, laudantium necessitatibus
            </p>
        </div>

        <div class="mt-20 col-lg-4 col-md-6 col-sm-6 col-xs-12 pr-50 px-15-sm">
          
            <h4 class="mt-40 font-secondary bold fs-18 gray8">
                ÇEMBERLER
            </h4>
            <!-- Description -->
            <p class="mt-15 fs-18 gray6 lh-30">
                Açıklama yazısı gelecek... Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                 Autem nostrum iure, laudantium necessitatibus
            </p>
        </div>

        <div class="mt-20 col-lg-4 col-md-6 col-sm-6 col-xs-12 pr-50 px-15-sm">
          
            <h4 class="mt-40 font-secondary bold fs-18 gray8">
                SOMATİK YAS
            </h4>
            <!-- Description -->
            <p class="mt-15 fs-18 gray6 lh-30">
                Açıklama yazısı gelecek... Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                 Autem nostrum iure, laudantium necessitatibus
            </p>
        </div>

       
   
        
    </div>
</div>
</section> 

<div class="container mb-30 mt-30">
    <div class="row">
        <div
        id="blockquote-11"
        class="mt-30 bg-white bs-md px-75 py-75 relative d-flex align-items-center justify-content-center flex-wrap t-center">
        <!-- Quote -->
        <h4
            class="font-secondary light uppercase dark3 ls-5 ls-2-sm lh-40 fs-18 lh-30-sm fs-14-sm">
            Get closer than ever to your customers. So close that you tell them what they
            need well before they realize it themselves.
        </h4>
        <!-- Owner -->
        <p class="mt-40 ls-5 fs-11 bold uppercase black lh-normal fullwidth">Shakti Komala</p>
        <!-- Quote icon -->
        <div
            class="arial fs-300 lh-xs absolute top-percent-15 left-percent-5 opacity-1 pointer-events-none gray6">“</div>
    </div>
    </div>
</div>


<section id="article_956712" class="pb-50">
    <!-- Container for both side -->
    <div class="container-fluid px-0">
        <!-- Row for columns -->
        <div class="row mx-0 row-eq-height justify-content-between align-items-center">
            <!-- Column for services -->
            <div
                class="col-lg-6 mxw-750 mt-70-sm px-30 order-lg-1 order-2">
        
                <h1 class="bold mt-20 fs-40 fs-30-sm lh-50 lh-40-sm dark3">
                    The ideas that make
                    <br class="visible-xl">
                        customers go wow
                    </h1>
                    <!-- Description -->
                    <p class="mt-20 fs-20 gray7 lh-35 lh-30-sm">
                        Grow transformation mapping to create synergy. Amplify key demographics while
                        remembering to improve overall outcomes.
                    </p>
                    <!-- Title -->
                    <h5 class="mt-50 dark4 bold fs-18">
                        Creating unique ideas
                    </h5>
                    <!-- Description -->
                    <p class="mt-20 fs-20 gray7 lh-30">
                        Drive branding to in turn re-target key demographics. Amplifying innovation and
                        then gain traction. Demonstrate above the fold with a goal to make the logo
                        bigger.
                    </p>
                    <!-- Title -->
                    <h5 class="mt-50 dark4 bold fs-18">
                        Creating unique ideas
                    </h5>
                    <!-- Description -->
                    <p class="mt-20 fs-20 gray7 lh-30">
                        Synchronise cloud computing to in turn maximise share of voice.
                    </p>
                    <!-- Description -->
                    <p class="mt-20 fs-20 gray7 lh-30">
                        Demonstrating a holistic approach and try to be on brand. Engage daily standups
                        in order to think outside the box. Take big data while remembering to get buy
                        in. Executing scrum masters and above all, be on brand.
                    </p>
                    <!-- Btn -->
                    <a
                        href="#"
                        class="lg-btn mt-50 bg-colored bg-colored1-hover radius fs-15 white bold slow-sm">
                        Learn more
                    </a>
                </div>
                <!-- End column for services -->
                <!-- Column for graphic objects -->
                <div
                    class="col-lg-6 d-flex justify-content-end align-items-center order-lg-2 order-1 px-0 o-hidden">
                    <!-- SVG Graphic FOR DESKTOPS -->
                    <object
                        id="services_graphic_design_02"
                        data="/front/content/gage/images/wind.svg"
                        type="image/svg+xml"
                        class="fullwidth mxh-1200 d-block visible-lg skrollable skrollable-after"></object>
                    <!-- SVG Graphic FOR MOBILE -->
                    <object
                        id="services_graphic_design_mobile_02"
                        data="/front/content/gage/images/wind_mobile.svg"
                        type="image/svg+xml"
                        class="fullwidth d-block hidden-lg skrollable skrollable-after"></object>
                </div>
                <!-- End graphics col -->
            </div>
            <!-- End row for columns -->
        </div>
        <!-- End container for both side -->
    </section>
    
   @endsection
@section('customJS')
<script src="/front/js/revolutionslider/jquery.themepunch.revolution.min.js"></script>
<script src="/front/js/revolutionslider/jquery.themepunch.tools.min.js"></script>
<script>

    var tpj=jQuery;
    var revapi1014;
    tpj(document).ready(function() {
    if(tpj("#rev_slider_1014_1").revolution == undefined){
    revslider_showDoubleJqueryError("#rev_slider_1014_1");
    }else{
    revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
        sliderType:"standard",
    jsFileLocation:"revolution/js/",
        sliderLayout:"fullscreen",
        dottedOverlay:"none",
        delay:9000,
        navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            mouseScrollReverse:"default",
            onHoverStop:"off",
            touch:{
                touchenabled:"on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
            }
            ,
            arrows: {
                style:"uranus",
                enable:true,
                hide_onmobile:true,
                hide_under:768,
                hide_onleave:false,
                tmp:'',
                left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:20,
                    v_offset:0
                },
                right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:20,
                    v_offset:0
                }
            }
        },
        responsiveLevels:[1240,1024,778,480],
        visibilityLevels:[1240,1024,778,480],
        gridwidth:[1240,1024,778,480],
        gridheight:[868,768,960,600],
        lazyType:"none",
        shadow:0,
        spinner:"off",
        stopLoop:"on",
        stopAfterLoops:0,
        stopAtSlide:1,
        shuffle:"off",
        autoHeight:"off",
        fullScreenAutoWidth:"off",
        fullScreenAlignForce:"off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "0px",
        disableProgressBar:"on",
        hideThumbsOnMobile:"off",
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        debugMode:false,
        fallbacks: {
            simplifyAll:"off",
            nextSlideOnWindowFocus:"off",
            disableFocusListener:false,
        }
    });
    }

    RsTypewriterAddOn(tpj, revapi1014);
    });

</script>

<script>
    $(document).ready(function(){
        "use strict";
        $('#filtered-slider').on('init', function(event, slick){
            $(".filter-button").each(function(){
                var filterName = $('.filter-button').attr('data-category');
                $("#filtered-slider").find('.' + filterName).parents(".slick-slide").addClass(filterName);
            });
        });
        $('#filtered-slider').slick();
        var filtered = false;
        $('.filter-button').on('click', function(){
            var filterClass = $(this).attr('data-category'),
                text = $(this).attr('data-filter-text'), showAllText = $(this).attr("data-show-all-text");
            if (filtered === false) {
                $('#filtered-slider').slick('slickFilter', '.' + filterClass);
                $(this).addClass("active").find(".button-text").html(showAllText);
                filtered = true;
            } else {
                $('#filtered-slider').slick('slickUnfilter');
                $(this).removeClass("active").find(".button-text").html(text);
                filtered = false;
            }
        });
    });
</script>

<script>
    (function($, window, document, undefined) {
        'use strict';
        $('#portfolio-items').cubeportfolio({
            mediaQueries: [{
                width: 992,
                cols: 5,
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
            gapHorizontal: 0,
            gapVertical: 0,
            caption: 'none',
            animationType: 'quicksand',
            displayType: 'none',
            displayTypeSpeed: 0,
        });

        $(".cbp-filter-item-active").addClass("active");
        $("[data-filter]").on("click", function(){
            $("[data-filter]").removeClass("active");
            $(".cbp-filter-item-active").addClass("active");
        });

    })(jQuery, window, document);
</script>
@endsection