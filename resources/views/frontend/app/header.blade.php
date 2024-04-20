
<nav id="navigation" class="modern-nav fixed bordered link-hover-01 hover-dark nav-dark dropdown-radius bg-green" data-offset="54">
    <div class="container nav-container ">
        <div class="row nav-wrapper justify-content-end">
            <div class="col">
                <a href="{{ route('home')}}" class="logo">
                    <img src="/logow.png" alt="{{ config('settings.img_alt')}}" class="logo-dark mxw-600">
                    <img src="/logow.png" alt="{{ config('settings.img_alt')}}" class="logo-white mxw-400">
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
                   
                    <li><a href="{{ route('team')}}" class="nav-link">Duyurular</a></li>
                    <li><a href="{{ route('team')}}" class="nav-link">Etkinlikler</a></li>
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
