

<nav id="navigation" class="modern-nav fixed bordered link-hover-01 hover-dark nav-dark dropdown-radius" data-offset="54">
 

    <div class="container nav-container">
        <div class="row nav-wrapper justify-content-end">
            <div class="col">
                <a href="{{ route('home')}}" class="logo">
                    <img src="/logoy.png" alt="{{ config('settings.img_alt')}}" class="logo-dark mxw-600">
                    <img src="/logoy.png" alt="{{ config('settings.img_alt')}}" class="logo-white mxw-100">
               </a>
            </div>
            <div class="col ml-auto nav-menu">
                <ul class="nav-links justify-content-end">
                    <li class="logo-for-mobile-navigation"><img src="/logow.png" alt="{{ config('settings.img_alt')}}"  class="logo-white mxw-100"></li>
                    <li><a href="{{ route('home')}}" class="nav-link"><i class="ti-home fs-16 white"></i></a></li>
                    <li><a href="{{ route('corporatedetail','hakkimizda')}}" class="nav-link">Hakkımda</a></li>
                    <li class="dd-toggle">
                        <a href="#" class="nav-link">Kalbine Köklen</a>
                        <ul class="dropdown-menu to-left">

                            <li class="dd-toggle">
                                <a href="#" class="nav-link">Sinir Sistemi Seansları</a>
                                <ul class="dropdown-menu to-right">
                                    @foreach ($Service->where('category', 12) as $item) 
                                        <li><a href="{{ route('service', $item->slug)}}" class="nav-link">{{ $item->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>


                            <li class="dd-toggle">
                                <a href="#" class="nav-link">Somatik Yas</a>
                                <ul class="dropdown-menu to-right">
                                    @foreach ($Service->where('category', 11) as $item) 
                                        <li><a href="{{ route('service', $item->slug)}}" class="nav-link">{{ $item->title }}</a></li>
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
                                <a href="#" class="nav-link">Meditasyonlar</a>
                                <ul class="dropdown-menu to-right">
                                    @foreach ($Service->where('category', 8) as $item) 
                                        <li class="dd-toggle"><a href="{{ route('service', $item->slug)}}" class="nav-link">{{ $item->title }}</a></li>
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


                    <li class="dd-toggle"> <a href="#" class="nav-link">Galeri</a>
                        <ul class="dropdown-menu to-right">
                            <li><a href="{{ route('home')}}" class="nav-link">Video Galeri</a></li>
                            <li><a href="{{ route('home')}}" class="nav-link">Foto Galeri</a></li>
                            <li><a href="{{ route('home')}}" class="nav-link">Podcast</a></li>
                        </ul> 
                    </li>
                   
                    <li><a href="{{ route('home')}}" class="nav-link">Etkinlikler</a></li>
                    <li><a href="{{ route('contactus')}}" class="nav-link">İletişim</a></li>
                </ul>
            </div>
            
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
