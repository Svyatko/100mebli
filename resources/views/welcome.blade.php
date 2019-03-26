@extends('layouts.app')

@section('content')
    <section class="main-category-container">
        <div class="container">
            <div class="row m-0 main-category-container__category-wrapper">
                <div class="col-lg-6 col-12 left-side">
                    <div class="row m-0 cat-autoheight">
                        <div class="col-6 one-img">
                            <a href="#">
                                <span>Ліжка</span>
                                <img src="{{asset('img/mark-zeff-new-york-loft-daughter-bedroom-0418-SPRINGHOMES.png')}}" alt="img">
                            </a>
                        </div>
                        <div class="col-6 two-img">
                            <div>
                                <a href="#">
                                    <span>Матраци</span>
                                    <img src="{{asset('img/high-quality-modern-bedroom-furniture-contemporary-grey-bedroom-modern-black-and-white-bedroom-furniture-805x512.png')}}" alt="img">
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <span>М'ягкі дивани</span>
                                    <img src="{{asset('img/1476401242902.png')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 right-side">
                    <h2 class=""><a href="#">Акції</a></h2>
                    <div class="sales-arrows">
                        <span class="sales-arrows__left-arrow"><span class="icon-arrow-left"></span></span>
                        <span class="sales-arrows__right-arrow"><span class="icon-arrow-right"></span></span>                       
                    </div>
                    <div class="sales-wrapper-slider">
                        <div class="sales-wrapper-slider__item">
                            <span class="procent-sale">Знижка -10%</span>
                            <a href="#"><img src="{{asset('img/slider-item.png')}}" alt="img"></a>
                            <span class="sale-dayoff">Залишилось 13 днів</span>
                        </div>
                        <div class="sales-wrapper-slider__item">
                            <span class="procent-sale">Знижка -10%</span>
                            <a href="#"><img src="{{asset('img/slider-item.png')}}" alt="img"></a>
                            <span class="sale-dayoff">Залишилось 8 днів</span>
                        </div>
                        <div class="sales-wrapper-slider__item">
                            <span class="procent-sale">Знижка -10%</span>
                            <a href="#"><img src="{{asset('img/slider-item.png')}}" alt="img"></a>
                            <span class="sale-dayoff">Залишилось 10 днів</span>
                        </div>
                        <div class="sales-wrapper-slider__item">
                            <span class="procent-sale">Знижка -10%</span>
                            <a href="#"><img src="{{asset('img/slider-item.png')}}" alt="img"></a>
                            <span class="sale-dayoff">Залишилось 8 днів</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slider-blocks-third">
        <div class="container">
            <div class="slider-blocks-third__title-with-arrows clearfix">
                <h2>НОВИНКИ</h2>
                <div class="slider-blocks-third__title-with-arrows__arrows">
                    <span class="left-arrow"><span class="icon-arrow-left"></span></span>
                    <span class="right-arrow"><span class="icon-arrow-right"></span></span>
                </div>
            </div>
            <div class="slider-blocks-third__slider-wrapper">
                <div class="p-2">
                    <div class="slider-blocks-third__slider-wrapper__item">
                        <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                        <div class="slider-blocks-third__slider-wrapper__item__description">
                            <h3>Ліжко двоспальне Амелія 180x190</h3>
                            <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                <span class="in-stock">В наявності</span>
                                <p>Ціна<strong> 2 694 </strong>грн</p>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                <a href="#"><span class="icon-compare"></span></a>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                <a href="#">Додати в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <div class="slider-blocks-third__slider-wrapper__item">
                        <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                        <div class="slider-blocks-third__slider-wrapper__item__description">
                            <h3>Ліжко двоспальне Амелія 180x190</h3>
                            <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                <span class="out-stock">Немає в наявності</span>
                                <p>Ціна<strong> 2 694 </strong>грн</p>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                    <a href="#"><span class="icon-compare"></span></a>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                <a href="#">Додати в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <div class="slider-blocks-third__slider-wrapper__item">
                        <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                        <div class="slider-blocks-third__slider-wrapper__item__description">
                            <h3>Ліжко двоспальне Амелія 180x190</h3>
                            <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                <span class="in-stock">В наявності</span>
                                <p>Ціна<strong> 2 694 </strong>грн</p>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                    <a href="#"><span class="icon-compare"></span></a>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                <a href="#">Додати в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <div class="slider-blocks-third__slider-wrapper__item">
                        <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                        <div class="slider-blocks-third__slider-wrapper__item__description">
                            <h3>Ліжко двоспальне Амелія 180x190</h3>
                            <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                <span class="in-stock">В наявності</span>
                                <p>Ціна<strong> 2 694 </strong>грн</p>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                    <a href="#"><span class="icon-compare"></span></a>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                <a href="#">Додати в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
                
              
                
            </div>
        </div>
    </section>
    <section class="about-container-info">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 col-lg-6 about-container-info__thumbnail" style="background-image: url({{asset('img/mark-zeff-new-york-loft-daughter-bedroom-0418-SPRINGHOMES.png')}});">
                    
                </div>

                <div class="col-12 col-lg-6 about-container-info__description">
                    <h1>ПРО НАС</h1>
                    <p>З нашими меблями кожна кімната вашого дому перетвориться на місце спокою та відпочинку. </p>
                    <p>Вам не потрібно хвилюватись про цілісність нових меблів для дитячої, коли ваші діти випробовуватимуть їх на міцність.</p>
                    <p>Усі дитячі меблі перед тим як потрапити в наш каталог проходять перевірку якості та безпечності. Тому з нашими меблями декілька годинне стрибання та бої подушками на ліжку стануть веселою розвагою для дітей, яка не завдасть більше клопоту батькам.</p>
                    <a class="read-more-btn" href="#">Дізнатись більше</a>
                </div>
            </div>
        </div>
    </section>
    <section class="slider-blocks-third">
            <div class="container">
                <div class="slider-blocks-third__title-with-arrows clearfix">
                    <h2>ПОПУЛЯРНІ ТОВАРИ</h2>
                    <div class="slider-blocks-third__title-with-arrows__arrows">
                        <span class="left-arrow"><span class="icon-arrow-left"></span></span>
                        <span class="right-arrow"><span class="icon-arrow-right"></span></span>
                    </div>
                </div>
                <div class="slider-blocks-third__slider-wrapper">
                    <div class="p-2">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
    
                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="in-stock">В наявності</span>
                                    <p>Ціна<strong> 2 694 </strong>грн</p>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                    <a href="#"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
    
                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="out-stock">Немає в наявності</span>
                                    <p>Ціна<strong> 2 694 </strong>грн</p>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
    
                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="in-stock">В наявності</span>
                                    <p>Ціна<strong> 2 694 </strong>грн</p>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
    
                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="in-stock">В наявності</span>
                                    <p>Ціна<strong> 2 694 </strong>грн</p>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                  
                    
                </div>
            </div>
    </section>
    <section class="news-slider-container">
        <div class="container">
            <div class="title-with-arrows">
                <h2>НОВИНИ</h2>
                <div class="title-with-arrows__arrows">
                    <span class="left-arrow"><span class="icon-arrow-left"></span></span>
                    <span class="right-arrow"><span class="icon-arrow-right"></span></span>
                </div>
            </div>

            <div class="news-slider-container__slider-wrapper-news">
                <div class="news-slider-container__slider-wrapper-news__item row m-0">
                    <div class="col-lg-6 col-12 p-0">
                        <a href="#" class="news-slider-container__slider-wrapper-news__item__thumb" style="background-image: url({{asset('img/modern-bed-designs.png')}});"></a>
                    </div>
                    <div class="col-lg-6 col-12">  
                        <div class="news-slider-container__slider-wrapper-news__item__description">
                            <h3>Mattress Transparent (каркас) венге БРВ Україна</h3>
                            <p>З нашими меблями кожна кімната вашого дому перетвориться на місце спокою та відпочинку. Вам не потрібно хвилюватись про цілісність нових меблів для дитячої, коли ваші діти випробовуватимуть їх на міцність. </p>
                            <a class="read-more-btn" href="#">Дізнатись більше</a>
                        </div>
                    </div>
                </div>
                <div class="news-slider-container__slider-wrapper-news__item row m-0">
                    <div class="col-lg-6 col-12 p-0">
                        <a href="#" class="news-slider-container__slider-wrapper-news__item__thumb" style="background-image: url({{asset('img/modern-bed-designs.png')}});"></a>
                    </div>
                    <div class="col-lg-6 col-12">  
                        <div class="news-slider-container__slider-wrapper-news__item__description">
                            <h3>Mattress Transparent (каркас) венге БРВ Україна</h3>
                            <p>З нашими меблями кожна кімната вашого дому перетвориться на місце спокою та відпочинку. Вам не потрібно хвилюватись про цілісність нових меблів для дитячої, коли ваші діти випробовуватимуть їх на міцність. </p>
                            <a class="read-more-btn" href="#">Дізнатись більше</a>
                        </div>
                    </div>
                </div>
                <div class="news-slider-container__slider-wrapper-news__item row m-0">
                    <div class="col-lg-6 col-12 p-0">
                        <a href="#" class="news-slider-container__slider-wrapper-news__item__thumb" style="background-image: url({{asset('img/modern-bed-designs.png')}});"></a>
                    </div>
                    <div class="col-lg-6 col-12">  
                        <div class="news-slider-container__slider-wrapper-news__item__description">
                            <h3>Mattress Transparent (каркас) венге БРВ Україна</h3>
                            <p>З нашими меблями кожна кімната вашого дому перетвориться на місце спокою та відпочинку. Вам не потрібно хвилюватись про цілісність нових меблів для дитячої, коли ваші діти випробовуватимуть їх на міцність. </p>
                            <a class="read-more-btn" href="#">Дізнатись більше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
@endsection