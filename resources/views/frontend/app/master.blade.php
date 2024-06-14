<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/xhtml">

<head>
    {!! SEO::generate() !!}
    @include('frontend.app.css')
    @yield('customCSS')
</head>

<body class="">

    @include('frontend.app.header')

    @yield('content')

    @include('frontend.app.footer')

    <div class="nav-bottom">
        <div class="popup-whatsapp fadeIn">
            <div class="content-whatsapp -top"><button type="button" class="closePopup">
                  <i class="material-icons icon-font-color">X</i>
                </button>
                <p>Merhaba, 😊 nasıl yardım edebilirim?</p>
            </div>
            <div class="content-whatsapp -bottom">
              <input class="whats-input" id="whats-in" type="text" Placeholder="Mesaj Gönder..." />
                <button class="btn- btn-success btn-sm" id="send-btn" type="button">
                    gönder
                </button>

            </div>
        </div>
        <button type="button" id="whats-openPopup" class="whatsapp-button">
            <img class="icon-whatsapp" src="https://cdn-icons-png.flaticon.com/512/134/134937.png">
        </button>
        <div class="circle-anime"></div>
    </div>


    @include('frontend.app.js')
    @yield('customJS')

    <script>


        popupWhatsApp = () => {

        let btnClosePopup = document.querySelector('.closePopup');
        let btnOpenPopup = document.querySelector('.whatsapp-button');
        let popup = document.querySelector('.popup-whatsapp');
        let sendBtn = document.getElementById('send-btn');

        btnClosePopup.addEventListener("click",  () => {
            popup.classList.toggle('is-active-whatsapp-popup')
        })
        
        btnOpenPopup.addEventListener("click",  () => {
            popup.classList.toggle('is-active-whatsapp-popup')
            popup.style.animation = "fadeIn .6s 0.0s both";
        })
        
        sendBtn.addEventListener("click", () => {
        let msg = document.getElementById('whats-in').value;
        let relmsg = msg.replace(/ /g,"%20");
        window.open('https://wa.me/{{ config('settings.whatsapp')}}?text='+relmsg, '_blank'); 
        
        });

        setTimeout(() => {
            popup.classList.toggle('is-active-whatsapp-popup');
        }, 1500);
        }

        popupWhatsApp();
    </script>



</body>
</html>
