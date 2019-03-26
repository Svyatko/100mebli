@extends('layouts.app')

@section('content')

<section class="profile-container">
  <div class="container">
    <div class="row m-0">
      <div class="col-lg-3 col-12 profile-container__sidebar">
        <h3>Особистий кабінет</h3>
        <div class="profile-container__sidebar__navigation">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class=" active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="true">ОСОБИСТІ ДАНІ</a>
            </li>
            <li class="nav-item">
              <a class="" id="order-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order"
                aria-selected="false">Мої замовлення</a>
            </li>
            <li class="nav-item">
              <a class="" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales"
                aria-selected="false">Акції</a>
            </li>
            <li class="nav-item">
              <a class="" id="compare-tab" data-toggle="tab" href="#compare" role="tab" aria-controls="compare"
                aria-selected="false">ПОРІВНЯННЯ</a>
            </li>
            <li class="nav-item">
              <a class="" id="favourite-tab" data-toggle="tab" href="#favourite" role="tab" aria-controls="favourite"
                aria-selected="false">БАЖАННЯ</a>
            </li>
            <li class="nav-item">
              <a href="#cart">Корзина</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-9 col-12 profile-container__content">
          <div class="profile-container__content__wrapper">
              <div class="tab-content" id="myTabContentProfile">
                  <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h2>Особисті дані</h2>
                    <div class="your-info">
                      <div class="max-w530 clearfix">
                        <p>Ім'я: <span>Андріан</span></p>
                        <p>Прізвище: <span>Романович</span></p>
                        <p>Електронна пошта: <span>a.rom@gmail.com</span></p>
                        <p>Телефон: <span>+380 63 00 99 221</span></p>
                        <a class="your-info__edit" id="edit-info-tab" data-toggle="tab" href="#edit-info" role="tab"
                          aria-controls="edit-info" aria-selected="false">Редагувати дані</a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
                    <h2>МОЇ ЗАМОВЛЕННЯ</h2>
                    <div class="sales-wrapper">
                      <div class="sales-wrapper__item">
                        <div class="row m-0">
                          <div class="sales-wrapper__item__img-wrap col-lg-4 col-12">
                            <a href="#"><img src="{{asset('img/1476401242902.png')}}" alt="img"></a>
                          </div>
                          <div class="sales-wrapper__item__descr col-lg-8 col-12">
                            <div class="sales-wrapper__item__descr__number">
                              <span>N 199285408</span>
                              <p>14 грудня 2018 17:54</p>
                            </div>
                            <h2>Ліжко двоспальне Едель</h2>
                            <p class="sales-wrapper__item__descr__price">Ціна<span>3 654</span>грн</p>
                            <p class="sales-wrapper__item__descr__status">Статус: <span>Куплено</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="sales-wrapper__item">
                        <div class="row m-0">
                          <div class="sales-wrapper__item__img-wrap col-lg-4 col-12">
                            <a href="#"><img src="{{asset('img/1476401242902.png')}}" alt="img"></a>
                          </div>
                          <div class="sales-wrapper__item__descr col-lg-8 col-12">
                            <div class="sales-wrapper__item__descr__number">
                              <span>N 199285408</span>
                              <p>14 грудня 2018 17:54</p>
                            </div>
                            <h2>Ліжко двоспальне Едель</h2>
                            <p class="sales-wrapper__item__descr__price">Ціна<span>3 654</span>грн</p>
                            <p class="sales-wrapper__item__descr__status">Статус: <span>Куплено</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                    <h2>Акції</h2>
                    <div class="sales-wrapper">
                      <div class="row">
                        <div class="col-12 col-lg-12">
                          <div class="sales-wrapper__main">
                            <div class="row">

                              <div class="col-12 col-md-6 col-lg-4 my-item">
                                <div class="sales-wrapper__main__item">
                                  <div class="sales-wrapper__main__item__image"
                                    style="background-image: url(public/img/action.png)">
                                    <div class="sales-wrapper__main__item__image__discount-text">
                                      <h2>Знижка -15%</h2>
                                    </div>
                                    <div class="sales-wrapper__main__item__image__days">
                                      <h3>Залишилось 8 днів</h3>
                                    </div>
                                  </div>
                                  <div class="sales-wrapper__main__item__info">
                                    <h4>Знижка на ліжко фабрики </h4>
                                    <p>
                                      з <span>28</span> січня по <span>17</span>лютого</p>
                                  </div>
                                </div>
                              </div>

                              <div class="col-12 col-md-6 col-lg-4 my-item">
                                <div class="sales-wrapper__main__item">
                                  <div class="sales-wrapper__main__item__image"
                                    style="background-image: url(public/img/action.png)">
                                    <div class="sales-wrapper__main__item__image__discount-text">
                                      <h2>Знижка -15%</h2>
                                    </div>
                                    <div class="sales-wrapper__main__item__image__days">
                                      <h3>Залишилось 8 днів</h3>
                                    </div>
                                  </div>
                                  <div class="sales-wrapper__main__item__info">
                                    <h4>Знижка на ліжко фабрики </h4>
                                    <p>
                                      з <span>28</span> січня по <span>17</span>лютого</p>
                                  </div>
                                </div>
                              </div>

                              <div class="col-12 col-md-6 col-lg-4 my-item">
                                <div class="sales-wrapper__main__item">
                                  <div class="sales-wrapper__main__item__image"
                                    style="background-image: url(public/img/action.png)">
                                    <div class="sales-wrapper__main__item__image__discount-text">
                                      <h2>Знижка -15%</h2>
                                    </div>
                                    <div class="sales-wrapper__main__item__image__days">
                                      <h3>Залишилось 8 днів</h3>
                                    </div>
                                  </div>
                                  <div class="sales-wrapper__main__item__info">
                                    <h4>Знижка на ліжко фабрики </h4>
                                    <p>
                                      з <span>28</span> січня по <span>17</span>лютого</p>
                                  </div>
                                </div>
                              </div>


                              <div class="col-12 col-md-6 col-lg-4 my-item">
                                <div class="sales-wrapper__main__item">
                                  <div class="sales-wrapper__main__item__image"
                                    style="background-image: url(public/img/action.png)">
                                    <div class="sales-wrapper__main__item__image__discount-text">
                                      <h2>Знижка -15%</h2>
                                    </div>
                                    <div class="sales-wrapper__main__item__image__days">
                                      <h3>Залишилось 8 днів</h3>
                                    </div>
                                  </div>
                                  <div class="sales-wrapper__main__item__info">
                                    <h4>Знижка на ліжко фабрики </h4>
                                    <p>
                                      з <span>28</span> січня по <span>17</span>лютого</p>
                                  </div>
                                </div>
                              </div>


                              <div class="col-12 col-md-6 col-lg-4 my-item">
                                <div class="sales-wrapper__main__item">
                                  <div class="sales-wrapper__main__item__image"
                                    style="background-image: url(public/img/action.png)">
                                    <div class="sales-wrapper__main__item__image__discount-text">
                                      <h2>Знижка -15%</h2>
                                    </div>
                                    <div class="sales-wrapper__main__item__image__days">
                                      <h3>Залишилось 8 днів</h3>
                                    </div>
                                  </div>
                                  <div class="sales-wrapper__main__item__info">
                                    <h4>Знижка на ліжко фабрики </h4>
                                    <p>
                                      з <span>28</span> січня по <span>17</span>лютого</p>
                                  </div>
                                </div>
                              </div>


                              <div class="col-12 col-md-6 col-lg-4 my-item">
                                <div class="sales-wrapper__main__item">
                                  <div class="sales-wrapper__main__item__image"
                                    style="background-image: url(public/img/action.png)">
                                    <div class="sales-wrapper__main__item__image__discount-text">
                                      <h2>Знижка -15%</h2>
                                    </div>
                                    <div class="sales-wrapper__main__item__image__days">
                                      <h3>Залишилось 8 днів</h3>
                                    </div>
                                  </div>
                                  <div class="sales-wrapper__main__item__info">
                                    <h4>Знижка на ліжко фабрики </h4>
                                    <p>
                                      з <span>28</span> січня по <span>17</span>лютого</p>
                                  </div>
                                </div>
                              </div>


                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="compare" role="tabpanel" aria-labelledby="compare-tab">
                    <div class="row-compare">
                      <h2>Меблі</h2>
                      <div class="wrapper-compare">
                        <div class="slider-blocks-third__slider-wrapper__item">
                          <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
                          <div class="slider-blocks-third__slider-wrapper__item__description">
                            <h3>Ліжко двоспальне Амелія 180x190</h3>
                            <div class="slider-blocks-third__slider-wrapper__item__description__price">
                              <span class="in-stock">В наявності</span>
                              <p>Ціна<strong> 2 694 </strong>грн</p>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                              <a href="#"><img src="{{asset('img/close.svg')}}" alt=""></a>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                              <a href="#">Додати в корзину</a>
                            </div>
                          </div>
                        </div>
                        <div class="slider-blocks-third__slider-wrapper__item">
                          <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
                          <div class="slider-blocks-third__slider-wrapper__item__description">
                            <h3>Ліжко двоспальне Амелія 180x190</h3>
                            <div class="slider-blocks-third__slider-wrapper__item__description__price">
                              <span class="in-stock">В наявності</span>
                              <p>Ціна<strong> 2 694 </strong>грн</p>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                              <a href="#"><img src="{{asset('img/close.svg')}}" alt=""></a>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                              <a href="#">Додати в корзину</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="compare-btn" id="compare-this-products-tab" data-toggle="tab" href="#compare-this-products"
                        role="tab" aria-controls="compare-this-products" aria-selected="false">Порівняти ці товари</a>
                    </div>
                    <div class="row-compare">
                      <div class="wrapper-compare">
                        <div class="slider-blocks-third__slider-wrapper__item">
                          <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
                          <div class="slider-blocks-third__slider-wrapper__item__description">
                            <h3>Ліжко двоспальне Амелія 180x190</h3>
                            <div class="slider-blocks-third__slider-wrapper__item__description__price">
                              <span class="in-stock">В наявності</span>
                              <p>Ціна<strong> 2 694 </strong>грн</p>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                              <a href="#"><img src="{{asset('img/close.svg')}}" alt=""></a>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                              <a href="#">Додати в корзину</a>
                            </div>
                          </div>
                        </div>
                        <div class="slider-blocks-third__slider-wrapper__item">
                          <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
                          <div class="slider-blocks-third__slider-wrapper__item__description">
                            <h3>Ліжко двоспальне Амелія 180x190</h3>
                            <div class="slider-blocks-third__slider-wrapper__item__description__price">
                              <span class="in-stock">В наявності</span>
                              <p>Ціна<strong> 2 694 </strong>грн</p>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                              <a href="#"><img src="{{asset('img/close.svg')}}" alt=""></a>
                            </div>
                            <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                              <a href="#">Додати в корзину</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <a class="compare-btn" id="compare-this-products-tab" data-toggle="tab" href="#compare-this-products"
                        role="tab" aria-controls="compare-this-products" aria-selected="false">Порівняти ці товари</a>
                    </div>

                  </div>
                  <div class="tab-pane fade" id="favourite" role="tabpanel" aria-labelledby="favourite-tab">
                    <div class="row-compare">
                      <h2>СПИСКИ БАЖАНЬ</h2>
                      <div class="wrapper-compare">
                        <div class="row">
                          <div class="col-12 col-lg-4">
                            <div class="slider-blocks-third__slider-wrapper__item">
                              <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
                              <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                  <span class="in-stock">В наявності</span>
                                  <p>Ціна<strong> 2 694 </strong>грн</p>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                  <a href="#"><img src="{{asset('img/close.svg')}}" alt=""></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                  <a href="#">Додати в корзину</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-12 col-lg-4">
                            <div class="slider-blocks-third__slider-wrapper__item">
                              <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
                              <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                  <span class="in-stock">В наявності</span>
                                  <p>Ціна<strong> 2 694 </strong>грн</p>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                  <a href="#"><img src="{{asset('img/close.svg')}}" alt=""></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                  <a href="#">Додати в корзину</a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-12 col-lg-4">
                            <div class="slider-blocks-third__slider-wrapper__item">
                              <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
                              <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                  <span class="in-stock">В наявності</span>
                                  <p>Ціна<strong> 2 694 </strong>грн</p>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                  <a href="#"><img src="{{asset('img/close.svg')}}" alt=""></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                  <a href="#">Додати в корзину</a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-12 col-lg-4">
                            <div class="slider-blocks-third__slider-wrapper__item">
                              <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
                              <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                  <span class="in-stock">В наявності</span>
                                  <p>Ціна<strong> 2 694 </strong>грн</p>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                  <a href="#"><img src="{{asset('img/close.svg')}}" alt=""></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                  <a href="#">Додати в корзину</a>
                                </div>
                              </div>
                            </div>
                          </div>



                          <div class="col-12 col-lg-4">
                            <div class="slider-blocks-third__slider-wrapper__item">
                              <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
                              <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                  <span class="in-stock">В наявності</span>
                                  <p>Ціна<strong> 2 694 </strong>грн</p>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                  <a href="#"><img src="{{asset('img/close.svg')}}" alt=""></a>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                                  <a href="#">Додати в корзину</a>
                                </div>
                              </div>
                            </div>
                          </div>




                          <div class="col-12 col-lg-4">
                            <div class="slider-blocks-third__slider-wrapper__item">
                              <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
                              <div class="slider-blocks-third__slider-wrapper__item__description">
                                <h3>Ліжко двоспальне Амелія 180x190</h3>
                                <div class="slider-blocks-third__slider-wrapper__item__description__price">
                                  <span class="in-stock">В наявності</span>
                                  <p>Ціна<strong> 2 694 </strong>грн</p>
                                </div>
                                <div class="slider-blocks-third__slider-wrapper__item__description__compare">
                                  <a href="#"><img src="{{asset('img/close.svg')}}" alt=""></a>
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
                  <div class="tab-pane fade" id="edit-info" role="tabpanel" aria-labelledby="edit-info-tab">
                    <h2>Редагувати дані</h2>
                    <div class="edit-your-data">
                      <div class="max-w530">
                        <form action="" class="clearfix">
                          <div>
                            <label for="yourname">Ім'я</label>
                            <input id="youname" type="text" value="Андріан">
                          </div>
                          <div>
                            <label for="yoursurname">Прізвище</label>
                            <input id="yoursurname" type="text">
                          </div>
                          <div>
                            <label for="youremail">Електронна пошта</label>
                            <input id="youremail" type="email" value="a.rom@gmail.com">
                          </div>
                          <div>
                            <label for="yourphone">Телефон</label>
                            <div class="d-flex align-items-center flex-row">
                              <input id="yourphone" class="w-100 mr-3" type="text" value="+380 63 00 99 221">
                              <span><a href="#">Підтвердити номер</a></span>
                            </div>
                          </div>
                          <input class="save-changes" type="submit" value="Зберегти зміни">
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="compare-this-products" role="tabpanel"
                    aria-labelledby="compare-this-products-tab">
                    <h2>Порівняння меблів</h2>
                    <div class="wrapper-compare">
                      <div class="slider-blocks-third__slider-wrapper__item">
                        <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
                        <div class="slider-blocks-third__slider-wrapper__item__description">
                          <h3>Ліжко двоспальне Амелія 180x190</h3>
                          <div class="slider-blocks-third__slider-wrapper__item__description__price">
                            <span class="in-stock">В наявності</span>
                            <p>Ціна<strong> 2 694 </strong>грн</p>
                          </div>
                          <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                            <a href="#">Додати в корзину</a>
                          </div>
                        </div>
                      </div>
                      <div class="slider-blocks-third__slider-wrapper__item">
                        <a href="#"><img src="{{asset('img/modern-bed-designs.png')}}" alt="img"></a>
                        <div class="slider-blocks-third__slider-wrapper__item__description">
                          <h3>Ліжко двоспальне Амелія 180x190</h3>
                          <div class="slider-blocks-third__slider-wrapper__item__description__price">
                            <span class="in-stock">В наявності</span>
                            <p>Ціна<strong> 2 694 </strong>грн</p>
                          </div>
                          <div class="slider-blocks-third__slider-wrapper__item__description__add-to-cart-btn">
                            <a href="#">Додати в корзину</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-info-compare">
                      <h2>Усі</h2>
                      <div class="row m-0">
                        <div class="col-lg-6 col-12 p-0">
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Тип</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>PocketSpring</span></div>
                          </div>
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Матеріал</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>Carbon Foam</span></div>
                          </div>
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Жорсткість</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>4</span></div>
                          </div>
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Вид жорсткості</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>Симетрична жорсткість</span></div>
                          </div>
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Матеріал чохла</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>Трикотажне полотно</span></div>
                          </div>
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Особливості</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>Двобічний , З єврокаркасом</span></div>
                          </div>
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Розміри</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>160x200 см</span></div>
                          </div>
                        </div>

                        <div class="col-lg-6 col-12 p-0">
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Тип</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>PocketSpring</span></div>
                          </div>
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Матеріал</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>Carbon Foam</span></div>
                          </div>
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Жорсткість</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>4</span></div>
                          </div>
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Вид жорсткості</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>Симетрична жорсткість</span></div>
                          </div>
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Матеріал чохла</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>Трикотажне полотно</span></div>
                          </div>
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Особливості</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>Двобічний , З єврокаркасом</span></div>
                          </div>
                          <div class="row m-0 gray-line-style">
                            <div class="col-lg-6 col-12 p-0"><span>Розміри</span></div>
                            <div class="col-lg-6 col-12 p-0"><span>160x200 см</span></div>
                          </div>
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