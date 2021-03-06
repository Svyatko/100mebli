@extends('layouts.app')
@section('content')
<section class="delivery-container">
    <div class="container">
        <h2>ДОСТАВКА І ОПЛАТА</h2>
        <div class="delivery-container__wrapper">
            <div class="row m-0">
                <div class="col-lg-6 col-12 left-side">
                    <h3>Способи доставки:</h3>
                    <ul>
                        <li>Самовивезення<span>Ви забираєте своє замовлення в слушний для Вас час, заздалегідь погодивши усі деталі з менеджером.</span></li>
                        <li>Доставка до підїзду. По Львову.<span>Вартість доставки до підїзду становить 150 гривень. Підйом вантажу на поверх за домовленістю. Замовлення на суму від 6000 грн. доставляється безкоштовно.</span></li>
                        <li>Доставка перевізником по Україні<span>Вартість доставки за тарифами перевізника. Перевізником по території України : Нова Пошта, Делівері, Автолюкс, Нічний Експрес, Інтайм. Товар вирушає за умови передоплати. Переказом на картковий рахунок в ПриватБанку(до суми + 1%)</span></li>
                        <li>Доставка по Львівській області<span>Доставляємо товари до підїзду по Львівській області. За домовленістю.</span></li>
                    </ul>
                </div>

                <div class="col-lg-6 col-12 right-side">
                    <h3>Способи оплати:</h3>
                    <ul>
                        <li>Оплата через "ПриватБанк"<span>Переказом на картковий рахунок в ПриватБанку(до суми + 1%) .</span></li>
                        <li>Післяплатою (Наложенный платеж)<span>Післяплатою(оплата товару готівкою при отриманні товару). Перевізником по території України : Новою поштою</span></li>
                        <li>Готівкою<span>При отриманні товару.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection