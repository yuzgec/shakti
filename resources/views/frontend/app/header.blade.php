

<nav id="navigation" class="modern-nav fixed bordered link-hover-01 hover-dark nav-dark dropdown-radius" data-offset="54">
 

    <div class="container nav-container">
        <div class="row nav-wrapper justify-content-end">
            <div class="col">
                <a href="{{ route('home')}}" class="logo">
                    <img src="/logoc.png" alt="{{ config('settings.img_alt')}}" class="logo-dark mxw-600">
                    <img src="/logoc.png" alt="{{ config('settings.img_alt')}}" class="logo-white mxw-100">
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

                    <li><a href="{{ route('home')}}" class="nav-link">Yazılar & Şiirler</a></li>

                    <li><a href="{{ route('home')}}" class="nav-link">Etkinlikler</a></li>
                    <li><a href="{{ route('contactus')}}" class="nav-link">İletişim</a></li>

                    <li class="extra-links">
                        <div class="bracket"></div>
                        
                        <a
                            href="https://youtube.com/"
                            target="_blank"
                            class="nav-link"
                            title="Twitter">
                            <i class="ti-youtube"></i>
                        </a>

                        <a
                            href="https://facebook.com/"
                            target="_blank"
                            class="nav-link"
                            title="facebook">
                            <i class="ti-facebook"></i>
                        </a>
                        <a
                            href="https://www.instagram.com//"
                            target="_blank"
                            class="nav-link"
                            title="Instagram">
                            <i class="ti-instagram"></i>
                        </a>

                        <a
                            href="https://www.instagram.com//"
                            target="_blank"
                            class="nav-link"
                            title="spotify">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0,0,256,256">
                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,1.99023c-12.73313,0 -23.00977,10.27663 -23.00977,23.00977c0,12.73313 10.27663,23.00977 23.00977,23.00977c12.73313,0 23.00977,-10.27663 23.00977,-23.00977c0,-12.73313 -10.27663,-23.00977 -23.00977,-23.00977zM25,4.00977c11.65087,0 20.99023,9.33937 20.99023,20.99023c0,11.65087 -9.33937,20.99023 -20.99023,20.99023c-11.65086,0 -20.99023,-9.33937 -20.99023,-20.99023c0,-11.65086 9.33937,-20.99023 20.99023,-20.99023zM21.93359,14c-5.93275,0 -10.39722,1.02745 -10.61523,1.07813h-0.00195v0.00195c-1.60088,0.37379 -2.61045,1.99926 -2.23828,3.59961c0.37216,1.60179 1.9974,2.60885 3.59766,2.24219h0.00781l0.00586,-0.00195c-0.11361,0.02771 0.04983,-0.01188 0.16992,-0.03711c0.1201,-0.02523 0.29741,-0.06019 0.52734,-0.10352c0.45987,-0.08666 1.12748,-0.20295 1.95898,-0.31836c1.66302,-0.23082 3.98002,-0.46094 6.58789,-0.46094h0.0625c4.31289,0.0059 10.5103,0.66778 15.48438,3.58789h0.00195v0.00195c0.47243,0.27544 0.99914,0.41016 1.51563,0.41016c1.02905,0 2.03473,-0.53739 2.58984,-1.48242c0.83251,-1.4178 0.35006,-3.27198 -1.06836,-4.10547c-6.24316,-3.66535 -13.51061,-4.40497 -18.51562,-4.41211zM21.93359,16h0.07031c4.80493,0.007 11.74778,0.75846 17.50195,4.13672c0.48758,0.28651 0.64291,0.88294 0.35742,1.36914c-0.19089,0.32497 -0.52229,0.49414 -0.86523,0.49414c-0.17012,0 -0.33965,-0.04186 -0.50391,-0.13672l-0.00391,-0.00195c-5.47713,-3.2139 -11.98613,-3.8552 -16.49219,-3.86133h-0.06445c-2.72513,0 -5.12733,0.23979 -6.86133,0.48047c-0.867,0.12034 -1.56826,0.24 -2.05664,0.33203c-0.24419,0.04602 -0.43517,0.0853 -0.56836,0.11328c-0.12518,0.0263 -0.1162,0.02249 -0.2168,0.04688c-0.55574,0.12734 -1.07724,-0.19588 -1.20508,-0.74609c-0.12769,-0.54908 0.19606,-1.07032 0.74414,-1.19922c0.15198,-0.03532 4.46281,-1.02734 10.16406,-1.02734zM21.99219,22.00195c-2.50636,0.02098 -4.67021,0.25518 -6.25,0.49609c-1.57979,0.24092 -2.47713,0.45874 -2.76563,0.54102c-1.43126,0.40584 -2.27948,1.92274 -1.87305,3.35547c0.40774,1.43417 1.92433,2.27819 3.35547,1.87109l0.00586,-0.00195h0.00391c0.02594,-0.0061 0.06646,-0.01556 0.11914,-0.02734c0.10537,-0.02356 0.26083,-0.05549 0.46094,-0.0957c0.40021,-0.08042 0.97723,-0.18906 1.69141,-0.29687c1.42835,-0.21564 3.40223,-0.43367 5.58203,-0.45312c3.86324,-0.03406 8.24549,0.53366 12.52148,3.19727c0.44588,0.27986 0.949,0.41406 1.4375,0.41406c0.90575,0 1.79649,-0.4593 2.30859,-1.2793c0.78818,-1.26391 0.39548,-2.95709 -0.86914,-3.74414c-5.38464,-3.35471 -11.16004,-4.01442 -15.72852,-3.97656zM22.00977,24c4.36152,-0.03614 9.71494,0.59849 14.6543,3.67578c0.34538,0.21495 0.44434,0.6422 0.22852,0.98828c-0.1399,0.22401 -0.37108,0.33789 -0.61133,0.33789c-0.1315,0 -0.25688,-0.03328 -0.375,-0.10742l-0.00195,-0.00195c-4.69126,-2.92315 -9.52356,-3.53789 -13.59961,-3.50195c-2.3022,0.02055 -4.36389,0.2502 -5.86328,0.47656c-0.7497,0.11318 -1.3581,0.22629 -1.78711,0.3125c-0.2145,0.0431 -0.38409,0.07867 -0.50391,0.10547c-0.05991,0.0134 -0.10713,0.02482 -0.14258,0.0332c-0.03545,0.0084 0.02043,-0.0098 -0.10547,0.02734l0.00976,-0.00391c-0.38286,0.10891 -0.7745,-0.10631 -0.88476,-0.49414c-0.11141,-0.39274 0.10236,-0.77393 0.49414,-0.88477h0.00195c-0.01149,0.0033 1.01732,-0.2592 2.51953,-0.48828c1.50217,-0.22904 3.57615,-0.45459 5.9668,-0.47461zM22.5,29.00195c-4.35889,0.001 -7.58571,1.06047 -7.79102,1.12891c-1.29899,0.43226 -2.0129,1.86364 -1.58008,3.16211c0.43299,1.29897 1.86445,2.01973 3.16602,1.57813l-0.01562,0.00586c0.10018,-0.0322 0.1595,-0.05316 0.46289,-0.13477c0.30339,-0.08161 0.74961,-0.19093 1.30664,-0.30078c1.11405,-0.2197 2.67605,-0.43897 4.45117,-0.43945c4.33693,-0.00096 7.29902,1.03755 9.61328,2.58008v-0.00195c0.42377,0.28307 0.90995,0.42188 1.38477,0.42188c0.80665,0 1.60477,-0.39851 2.08203,-1.11523c0.75855,-1.13866 0.44473,-2.70502 -0.69336,-3.46484c-3.6452,-2.42978 -7.74661,-3.42198 -12.38672,-3.41992zM22.5,31.00195c4.35989,-0.0019 7.99455,0.89577 11.27734,3.08398c0.23828,0.16046 0.29769,0.45466 0.13867,0.69336c-0.10073,0.15127 -0.25462,0.22266 -0.41797,0.22266c-0.09719,0 -0.18716,-0.02505 -0.27539,-0.08398v-0.00195c-2.63374,-1.75543 -6.05959,-2.9151 -10.72266,-2.91406c-1.93887,0.00052 -3.62444,0.23726 -4.83789,0.47656c-0.60672,0.11965 -1.0969,0.23989 -1.43945,0.33203c-0.34255,0.09214 -0.64087,0.18981 -0.55469,0.16211l-0.00781,0.00195l-0.00781,0.00195c-0.26643,0.0904 -0.53594,-0.04337 -0.62695,-0.31641c-0.09101,-0.27304 0.04435,-0.54247 0.31641,-0.63281c0.05869,-0.01956 3.12709,-1.02443 7.1582,-1.02539z"></path></g></g>
                                </svg>                        </a>
                        <a
                            href="tel:{{ config('settings.telefon1')}}"
                            target="_blank"
                            class="nav-button bg-colored bg-colored1-hover white fs-11 uppercase bold py-15"
                            title="Instagram">{{ config('settings.telefon1')}}</a>
                    </li>                </ul>
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
