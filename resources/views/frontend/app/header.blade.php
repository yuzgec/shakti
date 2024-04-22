{{-- <nav id="navigation" class="modern-nav nav-lg sticky bordered link-hover-02 nav-dark dropdown-radius" data-offset="0">
    <!-- Navigation container - You can chnage container type and paddding value -->
    <div class="container-fluid nav-container">
        <!-- Row for cols in the nav -->
        <div class="row nav-wrapper justify-content-center">
            
            <!-- Column for Navigation -->
            <div class="col nav-menu">
                <!-- Navigation links, you can add nav-links-centered class for centered links -->
                <ul class="nav-links justify-content-end">
                    <!-- Logo for mobile navigation -->
                    <li class="logo-for-mobile-navigation"><img src="images/logos/logo_01_dark.svg" alt="Shakti Komala" class="logo-white"></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                </ul>
            </div>
            <!-- Column for logo on lg -->
            <div class="col-auto justify-content-center d-flex align-items-center visible-lg">
                <a href="{{ route('home')}}" class="logo justify-content-center bs-colored width-150 height-150 circle" data-bgcolor="#fff" data-0="transform: translate3d(0px,40px,0px) scale(1);" data-120="transform: translate3d(0px,20px,0px) scale(0.6);">
                    <img src="/logoc.png" alt="Shakti Komala" class="fullwidth mxh-100">
                </a>
            </div>
            <!-- Column for logo on sm -->
            <div class="col-auto justify-content-center d-flex align-items-center hidden-lg">
                <a href="i{{ route('home')}}" class="logo">
                    <img src="/logoc.png" alt="Shakti Komala" class="logo-white">
                    <img src="/logoc.png" alt="Shakti Komala" class="logo-dark">
                </a>
            </div>
            <!-- Column for Navigation - this column will be hidden on mobile. You should add this contents to first .nav-menu with hidden-lg class -->
            <div class="col nav-menu visible-lg">
                <!-- Navigation links, you can add nav-links-centered class for centered links -->
                <ul class="nav-links justify-content-start">
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                  
                </ul>
            </div>
            <!-- Mobile Nav Button -->
            <div class="mobile-nb">
                <div class="hamburger-menu">
                    <div class="top-bun"></div>
                    <div class="meat"></div>
                    <div class="bottom-bun"></div>
                </div>
            </div>
        </div>
        <!-- End Row for cols in the nav -->
    </div>
    <!-- End Navigation container -->
    <div class="mobile-nav-bg"></div>
</nav>
 --}}
{{-- 
<nav id="navigation" class="modern-nav fixed bordered link-hover-01 hover-dark nav-dark dropdown-radius bg-green" data-offset="54">
    <div class="container nav-container ">
        <div class="row nav-wrapper justify-content-end">
            <div class="col">
                <a href="{{ route('home')}}" class="logo">
                    <img src="/logoc.png" alt="{{ config('settings.img_alt')}}" class="logo-white mxw-600">
               </a>
            </div>
            <div class="col ml-auto nav-menu">
                <ul class="nav-links justify-content-end">
                    <li class="logo-for-mobile-navigation"><img src="images/logos/logo_03_dark.svg" alt="{{ config('settings.img_alt')}}"  class="logo-white mxw-100"></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                    <li><a href="{{ route('corporatedetail','hakkimizda')}}" class="nav-link">Hakkımda</a></li>
                    <li class="dd-toggle"> <a href="#" class="nav-link">Kalbine Köklen</a>
                        <ul class="dropdown-menu to-right">
                            @foreach ($Service->where('category', 1) as $item) 
                                <li><a href="{{ route('service', $item->slug)}}" class="nav-link">{{ $item->title }}</a></li>
                            @endforeach
                        </ul> 
                    </li>

                    <li class="dd-toggle"> <a href="#" class="nav-link">Multimedya</a>
                        <ul class="dropdown-menu to-right">
                            <li><a href="{{ route('home')}}" class="nav-link">Video Galeri</a></li>
                            <li><a href="{{ route('home')}}" class="nav-link">Foto Galeri</a></li>
                            <li><a href="{{ route('home')}}" class="nav-link">Podcast</a></li>
                        </ul> 
                    </li>
                   
                    <li><a href="{{ route('home')}}" class="nav-link">Duyurular</a></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Etkinlikler</a></li>
                    <li><a href="{{ route('contactus')}}" class="nav-link">İletişim</a></li>
                </ul>
            </div>
            <div class="d-none d-lg-block nav-menu">
                <ul class="nav-links justify-content-end">
                    <li class="extra-links">
                        <div class="bracket"></div>
                        <a href="https://www.instagram.com/" target="_blank" class="nav-link" title="Instagram"><i class="ti-instagram"></i></a>
                        <a href="https://www.youtube.com/" target="_blank" class="nav-link" title="youtube"><i class="ti-youtube"></i></a>
                        <a href="https://www.facebook.com/" target="_blank" class="nav-link" title="facebook"><i class="ti-facebook"></i></a>
                    </li>
                </ul>
            <div class="mobile-nb">
                <div class="hamburger-menu">
                    <div class="top-bun"></div>
                    <div class="meat"></div>
                    <div class="bottom-bun"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav-bg"></div>
</nav>
 --}}


 <nav id="navigation" class="modern-nav sticky fixed-height bordered link-hover-01 nav-white dropdown-radius" data-offset="0">
    <!-- Navigation container - You can chnage container type and paddding value -->
    <div class="container-fluid nav-container">
        <!-- Row for cols in the nav -->
        <div class="row nav-wrapper">
            
            <!-- Column for Navigation -->
            <div class="col nav-menu">
                <!-- Navigation links, you can add nav-links-centered class for centered links -->
                <ul class="nav-links justify-content-start">
                    <li class="logo-for-mobile-navigation"><img src="images/logos/logo_03_dark.svg" alt="{{ config('settings.img_alt')}}"  class="logo-white mxw-100"></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                    <li><a href="{{ route('corporatedetail','hakkimizda')}}" class="nav-link">Hakkımda</a></li>
                    <li class="dd-toggle"> <a href="#" class="nav-link">Kalbine Köklen</a>
                        <ul class="dropdown-menu to-right">
                            @foreach ($Service->where('category', 1) as $item) 
                                <li><a href="{{ route('service', $item->slug)}}" class="nav-link">{{ $item->title }}</a></li>
                            @endforeach
                        </ul> 
                    </li>
                   
                </ul>
            </div>
            <!-- Column for logo -->
            <div class="col">
                <a href="{{ route('home')}}" class="logo justify-content-lg-center fullwidth">
                    <div style="background-color: #fff;
                    border-radius: 200px;
                    width:250px;
                    height:250px;
                    ">
                    <img src="/logoc.png" alt="Shakti Komala" class="logo-dark">
                    </div>
                </a>

            </div>
            <!-- Column for Navigation - this column will be hidden on mobile. You should add this contents to first .nav-menu with hidden-lg class -->
            <div class="col nav-menu visible-lg">
                <!-- Navigation links, you can add nav-links-centered class for centered links -->
                <ul class="nav-links justify-content-end">
                    <li class="dd-toggle"> <a href="#" class="nav-link">Multimedya</a>
                        <ul class="dropdown-menu to-right">
                            <li><a href="{{ route('home')}}" class="nav-link">Video Galeri</a></li>
                            <li><a href="{{ route('home')}}" class="nav-link">Foto Galeri</a></li>
                            <li><a href="{{ route('home')}}" class="nav-link">Podcast</a></li>
                        </ul> 
                    </li>
                   
                    <li><a href="{{ route('home')}}" class="nav-link">Duyurular</a></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Etkinlikler</a></li>
                    <li><a href="{{ route('contactus')}}" class="nav-link">İletişim</a></li>
                </ul>
            </div>
            <!-- Mobile Nav Button -->
            <div class="mobile-nb">
                <div class="hamburger-menu">
                    <div class="top-bun"></div>
                    <div class="meat"></div>
                    <div class="bottom-bun"></div>
                </div>
            </div>
        </div>
        <!-- End Row for cols in the nav -->
    </div>
    <!-- End Navigation container -->
    <div class="mobile-nav-bg"></div>
</nav>