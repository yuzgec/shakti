

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
                    <li class="dd-toggle">
                        <a href="#" class="nav-link">Kalbine Köklen</a>
                        <ul class="dropdown-menu to-left">
                            <li class="dd-toggle">
                                <a href="#" class="nav-link">Meditasyonlar</a>
                                <ul class="dropdown-menu to-right">
                                    @foreach ($Service->where('category', 8) as $item) 
                                        <li class="dd-toggle"><a href="{{ route('service', $item->slug)}}" class="nav-link">{{ $item->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dd-toggle">
                                <a href="#" class="nav-link">Çemberler</a>
                                <ul class="dropdown-menu to-right">
                                    @foreach ($Service->where('category', 9) as $item) 
                                        <li><a href="{{ route('service', $item->slug)}}" class="nav-link">{{ $item->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dd-toggle">
                                <a href="#" class="nav-link">Sinir Sistemi Seansları</a>
                                <ul class="dropdown-menu to-right">
                                    @foreach ($Service->where('category', 12) as $item) 
                                        <li><a href="{{ route('service', $item->slug)}}" class="nav-link">{{ $item->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="dd-toggle"> <a href="#" class="nav-link">Aile Dizilimi</a>
                        <ul class="dropdown-menu to-right">
                            @foreach ($Service->where('category', 10) as $item) 
                                <li><a href="{{ route('service', $item->slug)}}" class="nav-link">{{ $item->title }}</a></li>
                            @endforeach
                        </ul> 
                    </li>
                    <li><a href="{{ route('home')}}" class="nav-link">Somatik Yas</a></li>

                  
                </ul>
            </div>

            <div class="col">
                <a href="{{ route('home')}}" class="logo justify-content-lg-center fullwidth">
                    <img src="/logoy.png" alt="Shakti Komala" class="logo-dark">
                </a>

            </div>

            <div class="col nav-menu visible-lg">
                <ul class="nav-links justify-content-end">
                    <li><a href="{{ route('corporatedetail','hakkimizda')}}" class="nav-link">Hakkımda</a></li>

                    <li class="dd-toggle"> <a href="#" class="nav-link">Galeri</a>
                        <ul class="dropdown-menu to-right">
                            <li><a href="{{ route('home')}}" class="nav-link">Video Galeri</a></li>
                            <li><a href="{{ route('home')}}" class="nav-link">Foto Galeri</a></li>
                            <li><a href="{{ route('home')}}" class="nav-link">Podcast</a></li>
                        </ul> 
                    </li>
                   
                    <li><a href="{{ route('home')}}" class="nav-link">Öneriler</a></li>
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