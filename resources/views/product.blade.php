@extends('layouts.app')


@section('content')
<section class="product-single-container">
    <div class="container">
        <div class="product-single-container__head-title-info">
            <h2>Ліжко двуспальне Титан</h2>
            <div class="mob-flex">
                <div class="product-single-container__head-title-info__rating">
                    <p><span>8</span> відгуків</p>
                    <div class="rating-default">
                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                        <input type="radio" id="star4" class="checked-active" name="rating" value="4" /><label for="star4"></label>
                        <input type="radio" id="star3"  name="rating" value="3" /><label for="star3"></label>
                        <input type="radio"  id="star2"  name="rating" value="2" /><label for="star2"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                    </div>
                </div>
                <div class="product-single-container__head-title-info__model-product">
                    <p><span>Модель: </span>2139-0689</p>
                </div>
            </div>
        </div>            
    </div>
</section>
    <section class="product-main-info-container">
        <div class="container">
            <div class="product-main-info-container__navigation">                
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="all-description-tab" data-toggle="tab" href="#all-description" role="tab" aria-controls="all-description" aria-selected="true">Все про товар</a>
                    </li>
                    <li>
                        <a id="characteristics-tab" data-toggle="tab" href="#characteristics" role="tab" aria-controls="characteristics" aria-selected="false">Характеристики</a>
                    </li>
                    <li>
                        <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Відгуки</a>
                    </li>
                    <li>
                        <a id="delivery-tab" data-toggle="tab" href="#delivery" role="tab" aria-controls="delivery" aria-selected="false">Доставка і оплата</a>
                    </li>
                </ul>
            </div>  
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all-description" role="tabpanel" aria-labelledby="all-description-tab">
                    <div class="row m-0 product-main-info-container__content">
                        <div class="col-12 col-lg-6 product-main-info-container__content__left-side">
                            <div class="product-main-info-container__content__left-side__wrapper">
                                <div class="product-main-info-container__content__left-side__wrapper__slider">
                                    <div class="slider-desc-main">
                                        <img src="{{asset('img/modern-bed-designs.png')}}" alt="img">
                                        <img src="{{asset('img/modern-bed-designs.png')}}" alt="img">
                                        <img src="{{asset('img/modern-bed-designs.png')}}" alt="img">
                                        <img src="{{asset('img/modern-bed-designs.png')}}" alt="img">
                                    </div>
                                    <div class="slider-desc-nav">
                                        <img src="{{asset('img/modern-bed-designs.png')}}" alt="img">
                                        <img src="{{asset('img/modern-bed-designs.png')}}" alt="img">
                                        <img src="{{asset('img/modern-bed-designs.png')}}" alt="img">
                                        <img src="{{asset('img/modern-bed-designs.png')}}" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="product-main-info-container__content__left-side__product-description">
                                <h2>Опис:<span> Ліжко двуспальне Титан</span></h2>
                                <p>Ліжко Титан виготовлене з екологічно чистої плити МДФ та покрите плівкою ПВХ, яка захищає поверхність ліжка від подряпин та ударів. Фурнітура - спеціальні ліжкові замки та додаткові кріплення каркасної частини. Каркас ліжка обладнаний ортопедичними ламелями (30 штук). Каркас має центральну опору, що дозволяє уникнути просідання ламелей та збільшити термін експлуатації матраца. Матрац не входить у вартість ліжка. Є можливість замовити підйомний механізм або шухляди до ліжка.</p>
                            </div>
                            <div class="product-main-info-container__content__left-side__main-info" >
                                <h2>Основні характеристики:</h2>
                                <div class="mt-4 mb-4">
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Країна виробник</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>Україна</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Гарантія</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>1 рік</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Основа ліжка</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>Букові ламелі</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Висота</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>+ 6,4 см до розміру матраца</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Ширина</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>+ 6,4 см до розміру матраца</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Висота узголів'я</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>105 см</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Висота узніжжя</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>41 см</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Ортопедичний матрац</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>Не входить у вартість</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Матеріал</p>
                                        </div>
                                        <div class="col-7">
                                            <p>ДСП/МДФ</p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 product-main-info-container__content__right-side">
                            
                            <div class="product-main-info-container__content__right-side__variations-block">
                                <p>Виберіть Комплектацію:</p>
                                <form action="/">
                                    <div class="radio-group">
                                        <input type="radio" id="option-one" name="selector">
                                        <label for="option-one" >Стандарт</label>
                                        <input type="radio" id="option-two" name="selector">
                                        <label for="option-two">Комфорт</label>
                                        <input type="radio" id="option-three" name="selector">
                                        <label for="option-three">Люкс</label>
                                        <input type="radio" id="option-four" name="selector">
                                        <label for="option-four">VIP</label>                                        
                                    </div> 
                                </form>
                            </div>
                            <div class="product-main-info-container__content__right-side__variations-block" >
                                <p>Виберіть матеріал:</p>
                                <form action="/">
                                    <div class="radio-group">
                                        <input type="radio" id="mdf" name="selector">
                                        <label for="mdf" >МДФ</label>                               
                                    </div> 
                                </form>
                            </div>
                            <div class="product-main-info-container__content__right-side__variations-block" >
                                <p>Виберіть розмір:</p>
                                <form action="/">
                                    <div class="radio-group">
                                        <input type="radio" id="size1" name="selector">
                                        <label for="size1" >140x200</label>                               
                                        <input type="radio" id="size2" name="selector">
                                        <label for="size2" >160x200</label>                               
                                        <input type="radio" id="size3" name="selector">
                                        <label for="size3" >180x200</label>                               
                                    </div> 
                                </form>
                            </div>
                            <div class="product-main-info-container__content__right-side__variations-block" >
                                <p>Виберіть колір:</p>
                                <form action="/">
                                    <div class="radio-group color-variation-style">
                                        <input type="radio" id="color1" name="selector">
                                        <label for="color1" ><img src="{{asset('img/1.png')}}"></label>  
                                        <input type="radio" id="color2" name="selector">
                                        <label for="color2" ><img src="{{asset('img/2.png')}}"></label>  
                                        <input type="radio" id="color3" name="selector">
                                        <label for="color3" ><img src="{{asset('img/3.png')}}"></label>  
                                        <input type="radio" id="color4" name="selector">
                                        <label for="color4" ><img src="{{asset('img/4.png')}}"></label>  
                                    </div> 
                                </form>
                            </div>
                            <div class="product-main-info-container__content__right-side__add-to-cart-container" >
                                <div class="row m-0">
                                    <div class="col-md-4 pl-0 d-flex align-items-center">
                                        <p class="in-stock">В наявності</p>
                                    </div>
                                    <div class="col-md-8 product-main-info-container__content__right-side__add-to-cart-container__buy-block">
                                        <p>Ціна<strong>2459</strong>грн</p>
                                        <button type="button" class="btn-def-red">Купити</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-main-info-container__content__left-side__reviews " >
                                <h2><span>Відгуки покупців: </span><span class="reviews-count"></span></h2>
                                <div class="product-main-info-container__content__left-side__reviews__wrapper">
                                    <div class="product-main-info-container__content__left-side__reviews__wrapper__item right-side-review">
                                        <div class="row m-0 flex-style-review">
                                            <div class="col-3 p-0 left-side">
                                                <p>Олег</p>
                                            </div>
                                            <div class="col-9 p-0 right-side">
                                                <span class="review-last-time">(2 дні тому)</span>
                                                <div class="rating-default">
                                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4"  name="rating" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3"  name="rating" value="3" /><label for="star3"></label>
                                                    <input type="radio"  id="star2" class="checked-active" name="rating" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                </div>
                                                <strong class="review-date">14.12.2018</strong>
                                            </div>
                                        </div>
                                        <div class="row m-0 review-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="product-main-info-container__content__left-side__reviews__wrapper__item right-side-review">
                                        <div class="row m-0 flex-style-review">
                                            <div class="col-3 p-0 left-side">
                                                <p>Андрій</p>
                                            </div>
                                            <div class="col-9 p-0 right-side">
                                                <span class="review-last-time">(2 дні тому)</span>
                                                <div class="rating-default">
                                                    <input type="radio" id="star5" class="checked-active" name="rating" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4"  name="rating" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3"  name="rating" value="3" /><label for="star3"></label>
                                                    <input type="radio"  id="star2"  name="rating" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                </div>
                                                <strong class="review-date">14.12.2018</strong>
                                            </div>
                                        </div>
                                        <div class="row m-0 review-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="product-main-info-container__content__left-side__reviews__wrapper__item right-side-review">
                                        <div class="row m-0 flex-style-review">
                                            <div class="col-3 p-0 left-side">
                                                <p>Андріян</p>
                                            </div>
                                            <div class="col-9 p-0 right-side">
                                                <span class="review-last-time">(2 дні тому)</span>
                                                <div class="rating-default">
                                                    <input type="radio" id="star5" class="checked-active" name="rating" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4"  name="rating" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3"  name="rating" value="3" /><label for="star3"></label>
                                                    <input type="radio"  id="star2"  name="rating" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                </div>
                                                <strong class="review-date">14.12.2018</strong>
                                            </div>
                                        </div>
                                        <div class="row m-0 review-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="product-main-info-container__content__left-side__reviews__wrapper__item right-side-review">
                                        <div class="row m-0 flex-style-review">
                                            <div class="col-3 p-0 left-side">
                                                <p>Віталік</p>
                                            </div>
                                            <div class="col-9 p-0 right-side">
                                                <span class="review-last-time">(4 дні тому)</span>
                                                <div class="rating-default">
                                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4" class="checked-active"  name="rating" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3"  name="rating" value="3" /><label for="star3"></label>
                                                    <input type="radio"  id="star2"  name="rating" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                </div>
                                                <strong class="review-date">14.12.2018</strong>
                                            </div>
                                        </div>
                                        <div class="row m-0 review-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="product-main-info-container__content__left-side__reviews__wrapper__item right-side-review">
                                        <div class="row m-0 flex-style-review">
                                            <div class="col-3 p-0 left-side">
                                                <p>Маша</p>
                                            </div>
                                            <div class="col-9 p-0 right-side">
                                                <span class="review-last-time">(99 днів тому)</span>
                                                <div class="rating-default">
                                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4"  name="rating" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3" class="checked-active" name="rating" value="3" /><label for="star3"></label>
                                                    <input type="radio"  id="star2"  name="rating" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                </div>
                                                <strong class="review-date">14.12.2018</strong>
                                            </div>
                                        </div>
                                        <div class="row m-0 review-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="product-main-info-container__content__left-side__reviews__wrapper__item right-side-review">
                                        <div class="row m-0 flex-style-review">
                                            <div class="col-3 p-0 left-side">
                                                <p>Evgen</p>
                                            </div>
                                            <div class="col-9 p-0 right-side">
                                                <span class="review-last-time">(9 днів тому)</span>
                                                <div class="rating-default">
                                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4"  name="rating" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3"  name="rating" value="3" /><label for="star3"></label>
                                                    <input type="radio"  id="star2"  name="rating" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" class="checked-active" name="rating" value="1" /><label for="star1"></label>
                                                </div>
                                                <strong class="review-date">19.12.2018</strong>
                                            </div>
                                        </div>
                                        <div class="row m-0 review-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn-def-red show-more" >Переглянути всі <i class="fas fa-angle-down"></i></button>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="characteristics" role="tabpanel" aria-labelledby="characteristics-tab">
                    <div class="row m-0 product-main-info-container__content">
                        <div class="col-12 col-lg-6 product-main-info-container__content__left-side">
                            <div class="product-main-info-container__content__left-side__product-description">
                                <h2>Опис:<span> Ліжко двуспальне Титан</span></h2>
                                <p>Ліжко Титан виготовлене з екологічно чистої плити МДФ та покрите плівкою ПВХ, яка захищає поверхність ліжка від подряпин та ударів. Фурнітура - спеціальні ліжкові замки та додаткові кріплення каркасної частини. Каркас ліжка обладнаний ортопедичними ламелями (30 штук). Каркас має центральну опору, що дозволяє уникнути просідання ламелей та збільшити термін експлуатації матраца. Матрац не входить у вартість ліжка. Є можливість замовити підйомний механізм або шухляди до ліжка.</p>
                            </div>
                            <div class="product-main-info-container__content__left-side__main-info" >
                                <h2>Основні характеристики:</h2>
                                <div class="mt-4 mb-4">
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Країна виробник</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>Україна</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Гарантія</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>1 рік</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Основа ліжка</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>Букові ламелі</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Висота</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>+ 6,4 см до розміру матраца</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Ширина</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>+ 6,4 см до розміру матраца</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Висота узголів'я</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>105 см</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Висота узніжжя</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>41 см</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Ортопедичний матрац</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>Не входить у вартість</p>
                                        </div>
                                    </div>
                                    <div class="row m-0 product-main-info-container__content__left-side__main-info__line-col">
                                        <div class="col-5">
                                            <p>Матеріал</p>
                                        </div>
        
                                        <div class="col-7">
                                            <p>ДСП/МДФ</p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 product-main-info-container__content__right-side">
                            <div class="product-main-info-container__content__right-side__product-main-info">
                                <div class="row m-0">
                                    <div class="col-md-5">
                                        <img src="{{asset('img/modern-bed-designs.png')}}" alt="img">
                                    </div>
                                    <div class="col-md-7">
                                        <h2>Ліжко двуспальне Титан</h2>
                                        <span class="in-stock">В наявності</span>
                                        <div class="cart-price-container">
                                            <div>
                                                <p>Ціна<strong>2459</strong>грн</p>
                                                <button type="button" class="btn-def-red">Купити</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-main-info-container__content__right-side__variations-block">
                                <p>Виберіть Комплектацію:</p>
                                <form action="/">
                                    <div class="radio-group">
                                        <input type="radio" id="option-one1" name="selector">
                                        <label for="option-one1" >Стандарт</label>
                                        <input type="radio" id="option-two2" name="selector">
                                        <label for="option-two2">Комфорт</label>
                                        <input type="radio" id="option-three3" name="selector">
                                        <label for="option-three3">Люкс</label>
                                        <input type="radio" id="option-four4" name="selector">
                                        <label for="option-four4">VIP</label>
                                    </div> 
                                </form>
                            </div>
                            <div class="product-main-info-container__content__right-side__variations-block" >
                                <p>Виберіть матеріал:</p>
                                <form action="/">
                                    <div class="radio-group">
                                        <input type="radio" id="mdf1" name="selector">
                                        <label for="mdf1" >МДФ</label>                               
                                    </div> 
                                </form>
                            </div>
                            <div class="product-main-info-container__content__right-side__variations-block" >
                                <p>Виберіть розмір:</p>
                                <form action="/">
                                    <div class="radio-group">
                                        <input type="radio" id="size11" name="selector">
                                        <label for="size11" >140x200</label>                               
                                        <input type="radio" id="size22" name="selector">
                                        <label for="size22" >160x200</label>                               
                                        <input type="radio" id="size33" name="selector">
                                        <label for="size33" >180x200</label>                               
                                    </div> 
                                </form>
                            </div>
                            <div class="product-main-info-container__content__right-side__variations-block" >
                                <p>Виберіть колір:</p>
                                <form action="/">
                                    <div class="radio-group color-variation-style">
                                        <input type="radio" id="color11" name="selector">
                                        <label for="color11" ><img src="{{asset('img/1.png')}}"></label>  
                                        <input type="radio" id="color22" name="selector">
                                        <label for="color22" ><img src="{{asset('img/2.png')}}"></label>  
                                        <input type="radio" id="color33" name="selector">
                                        <label for="color33" ><img src="{{asset('img/3.png')}}"></label>  
                                        <input type="radio" id="color44" name="selector">
                                        <label for="color44" ><img src="{{asset('img/4.png')}}"></label>  
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="row m-0 product-main-info-container__content">
                        <div class="col-12 col-lg-6 product-main-info-container__content__left-side">
                            <div class="product-main-info-container__content__left-side__reviews" >
                                <h2><span>Відгуки покупців: </span><span class="reviews-count"></span></h2>
                                <div class="product-main-info-container__content__left-side__reviews__wrapper">
                                    <div class="product-main-info-container__content__left-side__reviews__wrapper__item left-side-review">
                                        <div class="row m-0 flex-style-review">
                                            <div class="col-3 p-0 left-side">
                                                <p>Олег</p>
                                            </div>
                                            <div class="col-9 p-0 right-side">
                                                <span class="review-last-time">(2 дні тому)</span>
                                                <div class="rating-default">
                                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4"  name="rating" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3"  name="rating" value="3" /><label for="star3"></label>
                                                    <input type="radio"  id="star2" class="checked-active" name="rating" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                </div>
                                                <strong class="review-date">14.12.2018</strong>
                                            </div>
                                        </div>
                                        <div class="row m-0 review-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="product-main-info-container__content__left-side__reviews__wrapper__item left-side-review">
                                        <div class="row m-0 flex-style-review">
                                            <div class="col-3 p-0 left-side">
                                                <p>Андрій</p>
                                            </div>
                                            <div class="col-9 p-0 right-side">
                                                <span class="review-last-time">(2 дні тому)</span>
                                                <div class="rating-default">
                                                    <input type="radio" id="star5" class="checked-active" name="rating" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4"  name="rating" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3"  name="rating" value="3" /><label for="star3"></label>
                                                    <input type="radio"  id="star2"  name="rating" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                </div>
                                                <strong class="review-date">14.12.2018</strong>
                                            </div>
                                        </div>
                                        <div class="row m-0 review-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="product-main-info-container__content__left-side__reviews__wrapper__item left-side-review">
                                        <div class="row m-0 flex-style-review">
                                            <div class="col-3 p-0 left-side">
                                                <p>Андріян</p>
                                            </div>
                                            <div class="col-9 p-0 right-side">
                                                <span class="review-last-time">(2 дні тому)</span>
                                                <div class="rating-default">
                                                    <input type="radio" id="star5" class="checked-active" name="rating" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4"  name="rating" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3"  name="rating" value="3" /><label for="star3"></label>
                                                    <input type="radio"  id="star2"  name="rating" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                </div>
                                                <strong class="review-date">14.12.2018</strong>
                                            </div>
                                        </div>
                                        <div class="row m-0 review-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="product-main-info-container__content__left-side__reviews__wrapper__item left-side-review">
                                        <div class="row m-0 flex-style-review">
                                            <div class="col-3 p-0 left-side">
                                                <p>Віталік</p>
                                            </div>
                                            <div class="col-9 p-0 right-side">
                                                <span class="review-last-time">(4 дні тому)</span>
                                                <div class="rating-default">
                                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4" class="checked-active"  name="rating" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3"  name="rating" value="3" /><label for="star3"></label>
                                                    <input type="radio"  id="star2"  name="rating" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                </div>
                                                <strong class="review-date">14.12.2018</strong>
                                            </div>
                                        </div>
                                        <div class="row m-0 review-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="product-main-info-container__content__left-side__reviews__wrapper__item left-side-review">
                                        <div class="row m-0 flex-style-review">
                                            <div class="col-3 p-0 left-side">
                                                <p>Маша</p>
                                            </div>
                                            <div class="col-9 p-0 right-side">
                                                <span class="review-last-time">(99 днів тому)</span>
                                                <div class="rating-default">
                                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4"  name="rating" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3" class="checked-active" name="rating" value="3" /><label for="star3"></label>
                                                    <input type="radio"  id="star2"  name="rating" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                </div>
                                                <strong class="review-date">14.12.2018</strong>
                                            </div>
                                        </div>
                                        <div class="row m-0 review-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="product-main-info-container__content__left-side__reviews__wrapper__item left-side-review">
                                        <div class="row m-0 flex-style-review">
                                            <div class="col-3 p-0 left-side">
                                                <p>Evgen</p>
                                            </div>
                                            <div class="col-9 p-0 right-side">
                                                <span class="review-last-time">(9 днів тому)</span>
                                                <div class="rating-default">
                                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4"  name="rating" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3"  name="rating" value="3" /><label for="star3"></label>
                                                    <input type="radio"  id="star2"  name="rating" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" class="checked-active" name="rating" value="1" /><label for="star1"></label>
                                                </div>
                                                <strong class="review-date">19.12.2018</strong>
                                            </div>
                                        </div>
                                        <div class="row m-0 review-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn-def-red" id="next-posts">Переглянути всі <i class="fas fa-angle-down"></i></button>
                                <form class="product-main-info-container__content__left-side__reviews__add-review-form" action="/">
                                    <div class="input-block-style">
                                        <label for="name">Ваше ім'я: </label>
                                        <input type="text" >
                                    </div>
                                    <div class="input-block-style">
                                        <label for="name">Email: </label>
                                        <input type="email" >  
                                    </div>
                                    <div class="stars-rated">
                                        <fieldset>
                                            <span class="star-cb-group">
                                            <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5"></label>
                                            <input type="radio" id="rating-4" name="rating" value="4" /><label for="rating-4"></label>
                                            <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3"></label>
                                            <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2"></label>
                                            <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1"></label>
                                            </span>
                                        </fieldset>
                                    </div>
                                    <div class="input-block-style">
                                        <label for="message">Ваш відгук: </label>
                                        <textarea name="" id="message" cols="30" rows="7"></textarea>
                                    </div>
                                    <input type="submit" class="submit-review btn-def-red" value="Зашити відгук">
                                </form>                        
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 product-main-info-container__content__right-side">
                            
                                <div class="product-main-info-container__content__right-side__product-main-info">
                                    <div class="row m-0">
                                        <div class="col-md-5">
                                            <img src="{{asset('img/modern-bed-designs.png')}}" alt="img">
                                        </div>
                                        <div class="col-md-7">
                                            <h2>Ліжко двуспальне Титан</h2>
                                            <span class="in-stock">В наявності</span>
                                            <div class="cart-price-container">
                                                <div>
                                                    <p>Ціна<strong>2459</strong>грн</p>
                                                    <button type="button" class="btn-def-red">Купити</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-main-info-container__content__right-side__variations-block">
                                    <p>Виберіть Комплектацію:</p>
                                    <form action="/">
                                        <div class="radio-group">
                                            <input type="radio" id="option-one3" name="selector">
                                            <label for="option-one3" >Стандарт</label>
                                            <input type="radio" id="option-two3" name="selector">
                                            <label for="option-two3">Комфорт</label>
                                            <input type="radio" id="option-three39" name="selector">
                                            <label for="option-three39">Люкс</label>
                                            <input type="radio" id="option-four3" name="selector">
                                            <label for="option-four3">VIP</label>
                                        </div> 
                                    </form>
                                </div>
                                <div class="product-main-info-container__content__right-side__variations-block" >
                                    <p>Виберіть матеріал:</p>
                                    <form action="/">
                                        <div class="radio-group">
                                            <input type="radio" id="mdf3" name="selector">
                                            <label for="mdf3" >МДФ</label>                               
                                        </div> 
                                    </form>
                                </div>
                                <div class="product-main-info-container__content__right-side__variations-block" >
                                    <p>Виберіть розмір:</p>
                                    <form action="/">
                                        <div class="radio-group">
                                            <input type="radio" id="size13" name="selector">
                                            <label for="size13" >140x200</label>                               
                                            <input type="radio" id="size23" name="selector">
                                            <label for="size23" >160x200</label>                               
                                            <input type="radio" id="size99" name="selector">
                                            <label for="size99" >180x200</label>                               
                                        </div> 
                                    </form>
                                </div>
                                <div class="product-main-info-container__content__right-side__variations-block" >
                                    <p>Виберіть колір:</p>
                                    <form action="/">
                                        <div class="radio-group color-variation-style">
                                            <input type="radio" id="color13" name="selector">
                                            <label for="color13" ><img src="{{asset('img/1.png')}}"></label>  
                                            <input type="radio" id="color23" name="selector">
                                            <label for="color23" ><img src="{{asset('img/2.png')}}"></label>  
                                            <input type="radio" id="color88" name="selector">
                                            <label for="color88" ><img src="{{asset('img/3.png')}}"></label>  
                                            <input type="radio" id="color99" name="selector">
                                            <label for="color99" ><img src="{{asset('img/4.png')}}"></label>  
                                        </div> 
                                    </form>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tab">
                    <div class="row m-0 product-main-info-container__content">
                        <div class="col-12 col-lg-6 product-main-info-container__content__left-side">
                            <div class="product-main-info-container__content__left-side__delivery-section">
                                <div>
                                    <h2>Доставка</h2>
                                    <p>Вартість доставки по Львову<br>- Доставка по місту до парадного входу – <strong>100 грн.</strong></p>
                                    <p>Вартість доставки по Київській області<br>- Вартість доставки по Київській обл. – <strong>100 грн + 7 грн/км від КП</strong></p>
                                    <p>Доставка по Україні до відділення перевізника:<br>- при замовлені матрацу або ліжка (при вартості одиниці товару <strong>від 4000 грн.</strong>) - <strong>Безкоштовно</strong></p>
                                </div>
                                <div>
                                    <h2>Оплата</h2>
                                    <ul>
                                        <li>готівкою при отримані</li>
                                        <li>банківскою карткою «VISA / MasterCard»</li>
                                        <li>через «POS-термінал» при отримані</li>
                                        <li>через платіжний сервіс «LiqPay»</li>
                                        <li>через інтернет банкінг «Privat24»</li>
                                        <li>оформити в розстрочку</li>
                                        <li>оформити в кредит</li>
                                    </ul>
                                </div>
                                <div>
                                    <h2>Повернення</h2>
                                    <p>Обмін/повернення товару протягом <strong>14 днів.</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 product-main-info-container__content__right-side">
                            <div class="product-main-info-container__content__right-side__product-main-info">
                                <div class="row m-0">
                                    <div class="col-md-5">
                                        <img src="{{asset('img/modern-bed-designs.png')}}" alt="img">
                                    </div>
                                    <div class="col-md-7">
                                        <h2>Ліжко двуспальне Титан</h2>
                                        <span class="in-stock">В наявності</span>
                                        <div class="cart-price-container">
                                            <div>
                                                <p>Ціна<strong>2459</strong>грн</p>
                                                <button type="button" class="btn-def-red">Купити</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-main-info-container__content__right-side__variations-block">
                                <p>Виберіть Комплектацію:</p>
                                <form action="/">
                                    <div class="radio-group">
                                        <input type="radio" id="option-one2" name="selector">
                                        <label for="option-one2" >Стандарт</label>
                                        <input type="radio" id="option-two222" name="selector">
                                        <label for="option-two222">Комфорт</label>
                                        <input type="radio" id="option-three2" name="selector">
                                        <label for="option-three2">Люкс</label>
                                        <input type="radio" id="option-four2" name="selector">
                                        <label for="option-four2">VIP</label>
                                    </div> 
                                </form>
                            </div>
                            <div class="product-main-info-container__content__right-side__variations-block" >
                                <p>Виберіть матеріал:</p>
                                <form action="/">
                                    <div class="radio-group">
                                        <input type="radio" id="mdf2" name="selector">
                                        <label for="mdf2" >МДФ</label>                               
                                    </div> 
                                </form>
                            </div>
                            <div class="product-main-info-container__content__right-side__variations-block" >
                                <p>Виберіть розмір:</p>
                                <form action="/">
                                    <div class="radio-group">
                                        <input type="radio" id="size55" name="selector">
                                        <label for="size55" >140x200</label>                               
                                        <input type="radio" id="size66" name="selector">
                                        <label for="size66" >160x200</label>                               
                                        <input type="radio" id="size77" name="selector">
                                        <label for="size77" >180x200</label>                               
                                    </div> 
                                </form>
                            </div>
                            <div class="product-main-info-container__content__right-side__variations-block" >
                                <p>Виберіть колір:</p>
                                <form action="/">
                                    <div class="radio-group color-variation-style">
                                        <input type="radio" id="color55" name="selector">
                                        <label for="color55" ><img src="{{asset('img/1.png')}}"></label>  
                                        <input type="radio" id="color66" name="selector">
                                        <label for="color66" ><img src="{{asset('img/2.png')}}"></label>  
                                        <input type="radio" id="color77" name="selector">
                                        <label for="color77" ><img src="{{asset('img/3.png')}}"></label>  
                                        <input type="radio" id="color888" name="selector">
                                        <label for="color888" ><img src="{{asset('img/4.png')}}"></label>  
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <section class="slider-blocks-third">
                    <div class="container p-0">
                        <div class="slider-blocks-third__title-with-arrows clearfix">
                            <h2>З ЦИМ ТОВАРОМ КУПУЮТЬ</h2>
                            <div class="slider-blocks-third__title-with-arrows__arrows">
                                <span class="left-arrow"><span class="icon-arrow-left"></span></span>
                                <span class="right-arrow"><span class="icon-arrow-right"></span></span>
                            </div>
                        </div>
                        <div class="slider-blocks-third__slider-wrapper">
                            <div class="p-2 padd-mob-style">
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
                            <div class="p-2 padd-mob-style">
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
                            <div class="p-2 padd-mob-style">
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
                            <div class="p-2 padd-mob-style">
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
            </section>
        </div>
    </section>
@endsection