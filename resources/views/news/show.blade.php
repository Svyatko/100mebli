@extends('layouts.app')

@section('content')

<section class="news-single-container">
    <div class="container">
        <div class="news-single-container__content">
            <div class="news-single-container__content__img-container">
                <img src="{{asset('img/modern-bed-designs.png')}}" alt="img">
            </div>
            <h2>Двоспальні ліжка з масиву натурального дерева</h2>
            <p>Широко відомо, що деревина є найкращим і найбільш витривалим матеріалом, який використовується для виробництва ліжок. Дерев"яне ліжко органічно і красиво виглядає в інтер'єрі спальні. Напевно, не одна людина, перш ніж купити ліжко цікавиться, з якого матеріалу який буде найкраще? На ринку з доступних матеріалів для виробництва ліжка: дуб, бук, ясен, горіх і багатьох інших. Кожен вид деревини унікальний, відрізняється від іншого кольором, міцністю, блиском, малюнком і структурою поверхні. Ліжко двоспальне, односпальне ліжко та двоярусне ліжко з натурального дерева, робить ваш інтер"єр унікальним. Деревина буку тверда, дуже важка, ліжка з цього виду надзвичайно міцні, ідеально підходять для сільського інтер'єру або стилізованого старого. Цей матеріал являє собою темний колір, як правило, зустрічає дерева темно-коричневого або зеленувато-коричневого кольору. Ліжка з дерева бук красиві, але дорогі.</p>
            <p>Деревина бука виробляє тверді, дуже міцні, природні яскраві кольори в відтінках бежевого. Морений бук ліжко має однорідний колір. Кращий матеріал збирають з дерев близько 110 років. Букове ліжко підходить для внутрішнього оздоблення, дитячих кімнат, спальні, двоспальних ліжок. Деревина горіха цінується матеріалом в меблевій промисловості, тому що вона легко піддається механічній обробці, роблять меблі тонкої форми. У світі відомо 15 видів волоського горіха. Як ви можете бачити вибір порід деревини, з якої виробляється ліжко, величезна. Ліжка з дерева є хорошим вкладенням, тому що, вони будуть служити вам протягом багатьох років.</p>
        </div>
    </div>
</section>
<section class="news-slider-container">
        <div class="container">
            <div class="title-with-arrows">
                <h2>ІНШІ НОВИНИ</h2>
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