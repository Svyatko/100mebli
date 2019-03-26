{{--verified--}}


<div class="modal fade modal-feedback registration-form" id="register-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Реєстрація</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="js-regiser-form" class="register-form-container clearfix" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div>
                        <label for="yourname">Імя</label>
                        <input type="text" id="yourname" name="first_name" required>
                    </div>
                    <div>
                        <label for="yoursurname">Прізвище</label>
                        <input type="text" id="yoursurname" name="last_name" required>
                    </div>
                    <div>
                        <label for="youremail">Email</label>
                        <input type="email" id="youremail" name="email" required>
                        <div class="js-email-feedback"></div>
                    </div>
                    <div>
                        <label for="yourpass">Пароль</label>
                        <input type="password" id="yourpass" name="password" required>
                        <div class="js-password-feedback"></div>
                    </div>
                    <div>
                        <label for="yourpassrepeat">Повторіть пароль</label>
                        <input type="password" id="yourpassrepeat" name="password_confirmation" required>
                    </div>
                    <input type="submit" class="register-btn" value="Реєстрація">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-feedback login-form" id="login-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Вхід</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="js-login-form" class="login-form-container clearfix" action="{{ route('login') }}"
                      method="POST">
                    @csrf
                    <div>
                        <label for="phoneoremail">Телефон або Email</label>
                        <input type="text" id="phoneoremail" name="email" required>
                        <div id="email-feedback"></div>
                    </div>
                    <div>
                        <label for="loginpassword">Пароль</label>
                        <input type="password" id="loginpassword" name="password" required>
                        <div id="password-feedback"></div>
                    </div>
                    <div class="login-navig">
                        <a class="remember-pass-link" href="#">Забули пароль ?</a>
                        <input type="submit" class="login-btn" value="Вхід">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-feedback checkout-form" id="checkout-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Оформлення замовлення</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="checkout-form-container clearfix" action="">
                    <div class="w-100 mb-4 clearfix">
                        <h3>Спосіб оплати:</h3>
                        <select>
                            <option data-display="Select">Nothing</option>
                            <option value="1">Some option</option>
                            <option value="2">Another option</option>
                            <option value="3" disabled>A disabled option</option>
                            <option value="4">Potato</option>
                        </select>
                    </div>
                    <div class="w-100 mb-4">
                        <h3>Спосіб доставки:</h3>
                        <select>
                            <option data-display="Select">Nothing</option>
                            <option value="1">Some option</option>
                            <option value="2">Another option</option>
                            <option value="3" disabled>A disabled option</option>
                            <option value="4">Potato</option>
                        </select>
                        <input type="text" placeholder="Ім'я отримувача">
                        <input type="text" placeholder="Прізвище отримувача">
                        <select>
                            <option data-display="Select">Nothing</option>
                            <option value="1">Some option</option>
                            <option value="2">Another option</option>
                            <option value="3" disabled>A disabled option</option>
                            <option value="4">Potato</option>
                        </select>
                        <input type="text" placeholder="Адрес">
                    </div>
                    <div class="w-100 mb-4">
                        <h3>E-mail:</h3>
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="w-100 mb-4">
                        <h3>Телефон:</h3>
                        <input type="tel" class="phone-mask" placeholder="+38 (0__) ___-__-__">
                    </div>
                    <div class="w-100 mb-4">
                        <h3>Комментарій:</h3>
                        <textarea name="" id="" cols="30" rows="7" placeholder="Повідомлення"></textarea>
                    </div>
                    <div class="checkout-pay-block">
                        <p>Всього:</p>
                        <span>12 514 грн</span>
                        <input type="submit" class="btn-def-red" value="Оформити замовлення">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-feedback paid-success-form" id="paid-success-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Дякуємо за покупку</h2>
            </div>
            <div class="modal-body">
                <div class="bt-1px">
                    <p>Ви успішно замовили свій товар, наші менеджери зв'яжуться з вами протягом дня</p>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn-def-red close">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-feedback cart-form" id="cart-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Кошик замовлень</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="shopping-cart">
                    <div class="product-incart">
                        <div class="product-description-info col-lg-7">
                            <a href="#"><img
                                        src="{{asset('img/mark-zeff-new-york-loft-daughter-bedroom-0418-SPRINGHOMES.png')}}"></a>
                            <div class="product-description-info__info">
                                <h2>Ліжко двоспальне Едель</h2>
                                <div class="d-flex d-lg-block align-items-center">
                                    <span class="in-stock">В наявності</span>
                                    <p>Ціна <strong class="product-price">3654</strong> грн</p>
                                </div>
                            </div>
                        </div>

                        <div class="product-quantity col-lg-2">
                            <span>Кількість шт.</span>
                            <input type="number" value="2" min="1">
                        </div>

                        <div class="product-curr-price col-lg-2">
                            <span>Сума</span>
                            <div class="d-flex align-items-center">
                                <div class="product-line-price">3654</div>
                                <p> грн</p>
                            </div>
                        </div>

                        <div class="product-removal col-lg-1 d-flex justify-content-lg-end">
                            <button class="remove-product"><img src="{{asset('img/delete.svg')}}" alt=""></button>
                        </div>
                    </div>
                    <div class="product-incart">
                        <div class="product-description-info col-lg-7">
                            <a href="#"><img
                                        src="{{asset('img/mark-zeff-new-york-loft-daughter-bedroom-0418-SPRINGHOMES.png')}}"></a>
                            <div class="product-description-info__info">
                                <h2>Ліжко двоспальне Едель</h2>
                                <div class="d-flex d-lg-block align-items-center">
                                    <span class="in-stock">В наявності</span>
                                    <p>Ціна <strong class="product-price">3000</strong> грн</p>
                                </div>
                            </div>
                        </div>

                        <div class="product-quantity col-lg-2">
                            <span>Кількість шт.</span>
                            <input type="number" value="1" min="1">
                        </div>

                        <div class="product-curr-price col-lg-2">
                            <span>Сума</span>
                            <div class="d-flex align-items-center">
                                <div class="product-line-price">3000</div>
                                <p> грн</p>
                            </div>
                        </div>

                        <div class="product-removal col-lg-1 d-flex justify-content-lg-end">
                            <button class="remove-product"><img src="{{asset('img/delete.svg')}}" alt=""></button>
                        </div>
                    </div>
                    <div class="product-incart">
                        <div class="product-description-info col-lg-7">
                            <a href="#"><img
                                        src="{{asset('img/mark-zeff-new-york-loft-daughter-bedroom-0418-SPRINGHOMES.png')}}"></a>
                            <div class="product-description-info__info">
                                <h2>Ліжко двоспальне Едель</h2>
                                <div class="d-flex d-lg-block align-items-center">
                                    <span class="in-stock">В наявності</span>
                                    <p>Ціна <strong class="product-price">1200</strong> грн</p>
                                </div>
                            </div>
                        </div>

                        <div class="product-quantity col-lg-2">
                            <span>Кількість шт.</span>
                            <input type="number" value="1" min="1">
                        </div>

                        <div class="product-curr-price col-lg-2">
                            <span>Сума</span>
                            <div class="d-flex align-items-center">
                                <div class="product-line-price">1200</div>
                                <p> грн</p>
                            </div>
                        </div>

                        <div class="product-removal col-lg-1 d-flex justify-content-lg-end">
                            <button class="remove-product"><img src="{{asset('img/delete.svg')}}" alt=""></button>
                        </div>
                    </div>


                    <div class="totals">
                        <div class="totals-item">
                            <p class="mob-total-price-title">Всього: </p>
                            <div class="d-flex align-items-center justify-content-lg-end pr-3">
                                <p class="totals-value" id="cart-subtotal">1</p>
                                <span>грн</span>
                            </div>
                        </div>
                    </div>

                    <div class="cart-btns">
                        <a class="continue-shopping-btn" href="#">Продовжити покупки</a>
                        <a class="get-to-checkout-btn" href="#">Оформити замовлення</a>
                    </div>


                </div>


            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-feedback consultation-form" id="consultation-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Замовити</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="consultation-form-container clearfix" action="">
                    <div>
                        <label for="consultation-name">Імя</label>
                        <input type="text" id="consultation-name">
                    </div>
                    <div>
                        <label for="consultation-phone">Телефон</label>
                        <input type="tel" class="phone-mask" placeholder="+38 (0__) ___-__-__">
                    </div>
                    <input type="submit" class="consultation-btn" value="Замовити">
                </form>
            </div>
        </div>
    </div>
</div>
