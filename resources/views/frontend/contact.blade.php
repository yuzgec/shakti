@extends('frontend.app.master')
@section('content')
<section id="home" class="relative white height-40vh height-60vh-sm align-items-center d-flex" data-bg="url(/header-bg.jpg)">
    <div class="container-md">
        <div class="t-center">
            <h5 class="fs-11 ls-4 semibold white uppercase">
                Shakti Komala
            </h5>
            <h1 class="mt-15 bold ls--1 ls-0-sm lh-md">
                İletişim
            </h1>
        </div>
    </div>

    <div class="absolute bottom-0 fullwidth align-items-center d-flex move-down-half">
        <div class="container relative zi-1">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 radius-lg px-50 px-30-sm py-15 fs-11 fs-10-sm t-center white ls-08 bold uppercase bs-colored" data-bgcolor="#006533">
                    <div class="row row-eq-height align-items-center justify-content-lg-between justify-content-center">
                        <div class="col-auto">
                            <p class="t-left t-center-sm bold fs-11">Shakti Komala - Aile Dizimi</p>
                        </div>
                        <div class="col-auto t-right t-center-sm mt-10-sm">
                            <a href="{{ route('home')}}" title="Anasayfa"><i class="ti-home"></i></a>
                            <i class="ti-angle-right fs-7 mx-15 mx-5-sm"></i>
                            <a href="{{ route('home')}}" title="Anasayfa">Anasayfa</a>
                            <i class="ti-angle-right fs-7 mx-15 mx-5-sm"></i>
                            <a href="#" class="stay c-default">İletişim</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="home">
    <div class="row mx-0">
        <div class="col-12 o-auto scrollbar-styled height-full height-auto-sm px-0 d-flex align-items-center flex-wrap justify-content-center">
            <div id="contact-form-section" class="t-left width-percent-90 fullwidth-sm pt-50 pb-50 px-70 px-30-sm mxw-900">
                <h5 class="uppercase fs-11 medium ls-3 ls-1-sm" data-color="#000">
                    Shakti Komala - Aile Dizilimi
                </h5>
                <h4 class="mt-15 bold fs-32 fs-22-sm dark underline-hover-slide underline-slide ls--1 ls-0-sm">
                   <a href="mailto:{{ config('settins.email1')}}">{{ config('settings.email1') }}</a>
                </h4>
                <p class="light fs-22 fs-18-sm gray7 lh-35 lh-25-sm mt-15">
                    Aşağıdaki formu kullanarak bize hızlı bir şekilde email gönderebilirsiniz. En kısa zamanda tarafınıza email yada telefon ile  dönüş yapılacaktır.
                </p>
                <form class=" mt-40" name="contact_form" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="name1" id="name1" placeholder="Adınız Soyadınız*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder">
                        </div>
                        <div class="col-12 mt-20">
                            <input type="email" name="email1" id="email1" placeholder="E-Mail Adresiniz*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder">
                        </div>
                        <div class="col-12 mt-20">
                            <textarea name="message1" id="message1" placeholder="Mesajınız*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder height-150"></textarea>
                        </div>
                        <div class="col-12 mt-20 d-flex justify-content-start align-items-center">
                           <button type="submit" id="submit" class="inline-block width-250 py-20 bs-colored white ls-3-hover slow bold fs-14 uppercase"
                            data-bgcolor="#000">Gönder</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       
    </div>
</section>
@endsection