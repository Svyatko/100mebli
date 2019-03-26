<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{ asset('css/frontend/vendor.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="{{ asset('css/frontend/compiled.min.css') }}">
</head>

<body>
    <header class="nav-menu-container nav-menu-desc d-lg-block d-none">
        <div class="nav-menu-container__header-block">
            <div class="container">
                <div class="row m-0">
                    <div class="col-lg-2 d-flex align-items-center p-0">
                        <div class="localization-block">
                            @if(LaravelLocalization::getCurrentLocale() == 'uk')
                                <a class="active" href="javascript:void(0);">Укр</a>
                                <a href="{{ LaravelLocalization::getLocalizedURL('ru', null, [], true) }}">Рус</a>
                            @else
                                <a href="{{ LaravelLocalization::getLocalizedURL('uk', null, [], true) }}">Укр</a>
                                <a class="active" href="javascript:void(0);">Рус</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 d-lg-flex align-items-lg-center justify-content-lg-between">
                    <button type="button" class="btn-def-red">@lang('_generic/header.consultation')</button>
                    <div class="selectors-block">
                        <select class="location-select">
                            <option data-display="вул. Богдана Хмельницького, 188">вул. Богдана Хмельницького, 188
                            </option>
                            <option value="вул. Богдана Хмельницького, 188">вул. Богдана Хмельницького, 181</option>
                            <option value="вул. Богдана Хмельницького, 188">вул. Богдана Хмельницького, 182</option>
                            <option value="вул. Богдана Хмельницького, 188">вул. Богдана Хмельницького, 183</option>
                        </select>
                        <select class="phone-select">
                            <option data-display="+380963889000"><a href="tel:+380963889000">+380963889000</a></option>
                            <option value="1"><a href="tel:+380963889001">+380963889001</a></option>
                            <option value="2"><a href="tel:+380963889004">+380963889004</a></option>
                            <option value="4"><a href="tel:+380963889002">+380963889002</a></option>
                        </select>
                    </div>
                    @guest
                    <div class="login-container">
                        <div>
                            <a href="javascript:;"
                               onclick="$('#login-modal').modal()">@lang('_generic/generic.login')</a>
                            <span> | </span>
                            <a href="javascript:;"
                               onclick="$('#register-modal').modal()">@lang('_generic/generic.register')</a>
                        </div>
                    </div>
                    @else
                        <span class="icon-logout"></span>
                        <div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button>Вихід</button>
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>

    <div class="nav-menu-container__menu-block">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-2">
                    <a href="{{ route('welcome') }}"><img class="logotype-image" src="{{ asset('img/logotype.png') }}"
                                                          alt="logo"></a>
                </div>
                <div class="col-lg-10 d-lg-flex align-items-lg-center justify-content-lg-end">
                    <ul>
                        <li><a href="#">@lang('_generic/header.about')</a></li>
                        <li><a href="#">@lang('_generic/header.news')</a></li>
                        <li>
                            <select class="info-select">
                                <option data-display="@lang('_generic/header.info.information')"><a href="#"></a>
                                </option>
                                <option data-display="Доставка і опалата"><a
                                            href="#">@lang('_generic/header.info.delivery')</a></option>
                                <option value="Поширені запитання"><a href="#">@lang('_generic/header.info.faqs')</a>
                                </option>
                                <option value="Контакти"><a href="#">@lang('_generic/header.info.contacts')</a></option>
                                <option value="Консультація"><a href="#">@lang('_generic/header.consultation')</a>
                                </option>
                            </select>
                        </li>
                        <li><a href="#"><span class="icon-compare"></span> @lang('_generic/header.comparisons')</a></li>
                        <li><a href="#"><span class="icon-heart"></span> @lang('_generic/header.favorites')</a></li>
                        <li><a href="#"><span class="icon-cart"></span> @lang('_generic/header.cart')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-menu-container__categories">
        <div class="container">
            <div class="nav_wrapper">
                <div
                        class="container claerfix d-flex align-items-lg-center align-items-start ">

                    <div class="w-100 ">
                        <nav id="menu1" class="menu-header">
                            <ul class="dropdown">
                                <li><a href="#Link">Ліжка</a>
                                    <ul style="background-image: url({{asset('img/Group-702.png')}}); background-size: cover; background-repeat: no-repeat;">
                                        <h3>Ліжка</h3>
                                        <li><a href="#Link">Двоярусні ліжка</a></li>
                                        <li><a href="#Link">Двоспальні ліжка</a></li>
                                        <li><a href="#Link">Односпальні ліжка</a></li>
                                        <li><a href="#Link">Дерев'яні ліжка</a></li>
                                        <li><a href="#Link">М'які ліжка</a></li>
                                        <li><a href="#Link">Ліжка з МДФ і ДСП</a></li>
                                        <li><a href="#Link">Ламельні каркаси</a></li>
                                    </ul>
                                </li>
                                <li><a href="#Link">Матраци</a></li>
                                <li><a href="#Link">М'ягкі дивани</a></li>
                                <li><a href="#Link">Жалюзі</a></li>
                                <li><a href="#Link">Аксесуари</a></li>
                                <li><a href="#Link">Вітальні</a>
                                    <ul style="background-image: url({{asset('img/Group-702.png')}}); background-size: cover; background-repeat: no-repeat;">
                                        <h3>Вітальні</h3>
                                        <li><a href="#Link">Двоярусні ліжка</a></li>
                                        <li><a href="#Link">Двоспальні ліжка</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="nav-menu-mobile d-lg-none">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="spinner-master">
                <input type="checkbox" id="spinner-form"/>
                <label for="spinner-form" class="spinner-spin">
                    <div class="spinner diagonal part-1"></div>
                    <div class="spinner horizontal"></div>
                    <div class="spinner diagonal part-2"></div>
                </label>
            </div>
            <a href="{{ route('welcome') }}"><img class="logotype-image" src="/img/logotype.png" alt="logo"></a>
            <div class="mob-compare-icons">
                <a href="#"><span class="icon-compare"></span></a>
                <a href="#"><span class="icon-heart"></span></a>
                <a href="#"><span class="icon-cart"></span></a>
            </div>
        </div>
        <nav id="menu" class="menu-header-mob">
            <ul class="dropdown">
                <li><a href="#Link">Ліжка</a>
                    <ul>
                        <li><a href="#Link">Двоярусні ліжка</a></li>
                        <li><a href="#Link">Двоспальні ліжка</a></li>
                        <li><a href="#Link">Односпальні ліжка</a></li>
                        <li><a href="#Link">Дерев'яні ліжка</a></li>
                        <li><a href="#Link">М'які ліжка</a></li>
                        <li><a href="#Link">Ліжка з МДФ і ДСП</a></li>
                        <li><a href="#Link">Ламельні каркаси</a></li>
                    </ul>
                </li>
                <li><a href="#Link">Матраци</a></li>
                <li><a href="#Link">М'ягкі дивани</a></li>
                <li><a href="#Link">Жалюзі</a></li>
                <li><a href="#Link">Аксесуари</a></li>
                <li><a href="#Link">Вітальні</a>
                    <ul>
                        <li><a href="#Link">Двоярусні ліжка</a></li>
                        <li><a href="#Link">Двоспальні ліжка</a></li>
                    </ul>
                </li>
                <li><a href="#Link">Акції</a></li>

            </ul>
            @guest
                <div class="login-container-mob">
                    <span class="icon-logout"></span>
                    <div>
                        <a href="javascript:;" onclick="$('#login-modal').modal()">Вхід</a>
                        <span> | </span>
                        <a href="javascript:;" onclick="$('#register-modal').modal()">Реєстрація</a>
                    </div>
                </div>
            @else
                <span class="icon-logout"></span>
                <div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="icon-logout">Вихід</button>
                    </form>
                </div>
            @endguest
            <div class="localization-block-mob">
                <a href="#">Рус</a>
                <a class="active" href="#">Укр</a>
            </div>
        </nav>
        <div class="sub-nav-menu-mob d-lg-none">
            <select class="info-select">
                <option data-display="Інформація"><a href="#"></a></option>
                <option data-display="Доставка і опалата"><a href="#">Доставка і опалата</a></option>
                <option value="Поширені запитання"><a href="#">Поширені запитання</a></option>
                <option value="Контакти"><a href="#">Контакти</a></option>
                <option value="Консультація"><a href="#">Консультація</a></option>
            </select>
            <button type="button" class="btn-def-red">Консультація</button>
        </div>
    </div>
</header>

@include('generic.modals')
@yield('content')
<section class="footer-container">
    <div class="container">
        <div class="row m-0 footer-container__wrapper">
            <div class="col-lg-3 col-md-6 col-12 footer-container__wrapper__item">
                <h2>Контакти</h2>
                <div class="footer-container__wrapper__item__row">
                    <div class="mw-style">
                        <span class="icon-phone"></span>
                    </div>
                    <span><a href="tel:+380963889000">+380963889000</a></span>
                </div>
                <div class="footer-container__wrapper__item__row">
                    <div class="mw-style">
                        <span class="icon-phone"></span>
                    </div>
                    <span><a href="tel:+380633889000">+380633889000</a></span>
                </div>
                <div class="footer-container__wrapper__item__row">
                    <div class="mw-style">
                        <span class="icon-phone"></span>
                    </div>
                    <span><a href="tel:+380955689000">+380955689000</a></span>
                </div>
                <div class="footer-container__wrapper__item__row">
                    <div class="mw-style">
                        <span class="icon-navigation"></span>
                    </div>
                    <p>Вул. Богдана Хмельницького, 188</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 footer-container__wrapper__item">
                <h2>Навігація</h2>
                <ul>
                    <li><a href="#">Про нас</a></li>
                    <li><a href="#">Новини</a></li>
                    <li><a href="#">Доставка і оплата</a></li>
                    <li><a href="#">Поширенні запитання</a></li>
                    <li><a href="#">Контакти</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-12 footer-container__wrapper__item">
                <h2>Режим роботи</h2>
                <p>Понеділок - п'ятниця <strong>10:00 - 19:00</strong></p>
                <p>Субота <strong>10:00 - 18:00</strong></p>
                <p>Неділя <strong>11:00 - 16:00</strong></p>

                <h2>Спосіб оплати</h2>
                <img class="payment" src="{{asset('img/payment-image.png')}}" alt="">
            </div>
            <div class="col-lg-3 col-md-6 col-12 footer-container__wrapper__item">
                <h2>Ми на карті</h2>
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<section class="copyright-container">
    <div class="container">
        <span>COPYRIGHT 2018 . ВСІ ПРАВА ЗАХИЩЕНО.</span>
    </div>
</section>
<script src="{{ asset('js/frontend/vendor.min.js') }}"></script>
<script src="{{ asset('js/frontend/app.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoLs4jh4_7ZW16LDVDAXDPGISWv9RN-x8&callback=initMap" async
        defer></script>

<script>
    function initMap() {
        var coords = {lat: 49.841952, lng: 24.0315921};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: coords
        });
        var marker = new google.maps.Marker({
            position: coords,
            map: map,
            icon: "{{asset('img/marker.svg')}}"
        });
    }
</script>
@stack('script')


</body>


</html>