@extends('layouts.app')
@section('content')

<section class="catalog-container py-5">
    <div class="container">
        <div class="row m-0">
                <button class="d-lg-none d-block btn-def-red m-auto" id="show-filter">Фільтри</button> 
            <div class="col-lg-3 col-12 my-2 catalog-container__sidebar content-filter">
                <form class="filter-form-style" action="#">
                    <h2>Категорії:</h2>
                    <p>
                        <input type="checkbox" id="id1" />
                        <label for="id1">Двоярусні ліжка</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id2" />
                        <label for="id2">Двоспальні ліжка</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id3" />
                        <label for="id3">Односпальні ліжка</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id4" />
                        <label for="id4">Дерев'яні ліжка</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id5" />
                        <label for="id5">М'які ліжка</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id6" />
                        <label for="id6">Металеві ліжка</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id7" />
                        <label for="id7">Ліжка з МДФ і ДСП</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id8" />
                        <label for="id8">Ламельні каркаси</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id9" />
                        <label for="id9">Комплектуючі для ліжок</label>
                    </p>                    
                </form>
                <div class="price-range-block clearfix">    
                    <h2>Ціна:</h2>                                    
                    <div id="slider-range" class="price-filter-range" name="rangeInput"></div>                    
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="range-count">
                            <label for="min_price">Від: </label>
                            <input type="number" min=0 max="9900" id="min_price" class="price-range-field" />
                        </div>
                        <div class="range-count">
                            <label for="max_price">До: </label>
                            <input type="number" min=0 max="10000" id="max_price" class="price-range-field" />
                            <span class="ml-1">грн</span>
                        </div>
                        
                    </div>  
                    <button type="button" class="btn-def-red float-right mt-3">Застосувати</button>                  
                                        
                </div>
                <form class="filter-form-style" action="#">
                    <h2>Розмір:</h2>
                    <p>
                        <input type="checkbox" id="id10" />
                        <label for="id10">80x190</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id11" />
                        <label for="id11">80x200</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id12" />
                        <label for="id12">90x190</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id13" />
                        <label for="id13">90x200</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id14" />
                        <label for="id14">140x190</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id15" />
                        <label for="id15">140x200</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id16" />
                        <label for="id16">160x190</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id17" />
                        <label for="id17">160x190</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id18" />
                        <label for="id18">160x200</label>
                    </p>                    
                </form>
                <form class="filter-form-style" action="#">
                    <h2>Матеріал корпуса:</h2>
                    <p>
                        <input type="checkbox" id="id19" />
                        <label for="id19">Смерека</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id20" />
                        <label for="id20">Дуб</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id21" />
                        <label for="id21">Бук</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id22" />
                        <label for="id22">Сосна</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id23" />
                        <label for="id23">Береза</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id24" />
                        <label for="id24">Вільха</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id25" />
                        <label for="id25">Ясень</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id26" />
                        <label for="id26">Метал</label>
                    </p>                    
                    <p>
                        <input type="checkbox" id="id27" />
                        <label for="id27">ДСП/МДФ</label>
                    </p>                    
                </form>
            </div>
            <div class="col-lg-9 my-2 col-12 catalog-container__content">
                <div class="row m-0">
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                        <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="in-stock">В наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                    
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="in-stock">В наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="out-stock">Немає в наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="out-stock">Немає в наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="in-stock">В наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="out-stock">Немає в наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="in-stock">В наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="in-stock">В наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="out-stock">Немає в наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="out-stock">Немає в наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="in-stock">В наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="out-stock">Немає в наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 col-xl-4 col-md-6 col-12 item-to-show" style="width: 100%; display: inline-block;">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}" tabindex="0"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>

                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="out-stock">Немає в наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                        <a href="#" tabindex="0"><span class="icon-compare"></span></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                    <a href="#" tabindex="0">Додати в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <button class="btn-def-red m-auto" id="next-posts">Побачити більше <i class="fas fa-angle-down"></i></button>               
               <div class="mt-5">
                   <div class="slider-blocks-third__title-with-arrows clearfix">
                    <h2>ІНШІ ТОВАРИ</h2>
                    <div class="slider-blocks-third__title-with-arrows__arrows">
                        <span class="left-arrow"><span class="icon-arrow-left"></span></span>
                        <span class="right-arrow"><span class="icon-arrow-right"></span></span>
                    </div>
                </div>
                <div class="slider-blocks-third__slider-wrapper">
                    <div class="p-2">
                        <div class="slider-blocks-third__slider-wrapper__item">
                            <a href="{{route('product', 1)}}"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
    
                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="in-stock">В наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
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
                            <a href="{{route('product', 1)}}"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
    
                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="out-stock">Немає в наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
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
                            <a href="{{route('product', 1)}}"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
    
                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="in-stock">В наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
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
                            <a href="{{route('product', 1)}}"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
    
                            <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                    <span class="in-stock">В наявності</span>
                                    <div>
                                        <span class="old-price">3400 грн</span>
                                        <p>Ціна<strong> 2 694 </strong>грн</p>
                                    </div>
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
            </div>
        </div>
    </div>
</section>

@endsection