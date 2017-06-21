<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <link href="{{ asset('/css/app.bundle.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" type="text/css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('/js/app.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>

    @yield('header_scripts')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>@yield('title')</title>
</head>
<body class="body">

<div class="main-container">
    <section id="logo">
        <div class="container">
            <div id="fixed-padding" style="display: none;"></div>
            <div class="row">
                <div class="col-sm-3 col-md-3 header-logo">
                    <a href="/"><img src="img/logo-blue-horizontal.png" class="img-responsive"></a>
                </div>
                <div class="col-sm-3 col-md-4 header-official">
                    <span>Официальный сайт отеля Альградо</span>
                    <div><a href="https://www.instagram.com/algrado05/" target="_blank"><img src="img/icon-insta.jpg"></a></div>
                </div>
                <div class="col-sm-2 col-md-2 header-button">
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#callbackModal">Задать вопрос</button>
                </div>
                <div class="col-sm-4 col-md-3 header-phones">
                    <div class="phone-number">
                        <span>+7 988 639-39-03</span>
                    </div>
                    <div class="phone-number">
                        <span>+7 988 639-39-03</span>
                    </div>
                    <div class="worktime">РЕЖИМ РАБОТЫ С 9:00 ДО 18:00</div>
                </div>
            </div>
        </div>
    </section>

    <section id="menu">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="navbar-toggle collapsed" data-toggle="collapse">Меню</div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <span class="sr-only">Меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <nav class="collapse navbar-collapse" id="navbar">
                <div class="logo-small">
                    <a href="#header" onclick="$('body').scrollTo($('#logo'), 500)"><img src="img/logo-blue-horizontal-small.png"></a>
                </div>
                <ul>
                    <li><a href="#appartments" onclick="$('body').scrollTo($('#appartments_top'), 500)">Наши номера</a></li>
                    <li><a href="#service" onclick="$('body').scrollTo($('#service_top'), 500)">Услуги и удобства</a></li>
                    <li><a href="#conditions" onclick="$('body').scrollTo($('#conditions_top'), 500)">Условия проживания</a></li>
                    <li><a href="#gallery" onclick="$('body').scrollTo($('#gallery_top'), 500)">Фотогалерея</a></li>
                    <li><a href="#map" onclick="$('body').scrollTo($('#map_top'), 500)">Расположение</a></li>
                    <li><a href="#contacts" onclick="$('body').scrollTo($('#contacts_top'), 500)">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <section id="meteo">
        <!-- Gismeteo Informer (begin) -->
        <div id="GMI_240x90-3_ru" class="gm-info">
            <div style="position:relative;width:240px;height:90px;border:solid 1px;background:#F5F5F5;border-color:#EAEAEA #E4E4E4 #DDDDDD #E6E6E6;border-radius:4px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;">
                <a style="font:11px/13px Arial,Verdana,sans-serif;text-align:center;text-overflow:ellipsis;text-decoration:none;display:block;overflow:hidden;margin:2px 3px;color:#0678CD;" href="https://gismeteo.ru/weather-makhachkala-5270/">Махачкала</a>
                <a style="font:9px/11px Tahoma,Arial,sans-serif;letter-spacing:0.5px;text-align:center;text-decoration:none;position:absolute;bottom:3px;left:0;width:100%;color:#333;" href="https://gismeteo.ru"><span style="color:#0099FF;">Gis</span>meteo</a>
            </div>
        </div>
        <script type="text/javascript">
            (function() {
                var
                    d = this.document,
                    o = this.navigator.userAgent.match(/MSIE (6|7|8)/) ? true : false,
                    s = d.createElement('script');

                s.src  = 'https://www.gismeteo.ru/informers/simple/install/';
                s.type = 'text/javascript';
                s[(o ? 'defer' : 'async')] = true;
                s[(o ? 'onreadystatechange' : 'onload')] = function() {
                    try {new GmI({
                        slug : 'c05797429621318e2317dc6b0289ff96',
                        type : '240x90-3',
                        city : '5270',
                        lang : 'ru'
                    })} catch (e) {}
                }

                d.body.appendChild(s);
            })();
        </script>
        <!-- Gismeteo Informer (finish) -->
    </section>

    @yield('slides')

    <section id="content">
        <div class="container">
            @yield('content')
        </div>
    </section>

    <section id="appartments">
        <div class="container-fluid">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="text-xl text-center">Наши номера</div>
            <p>&nbsp;</p>
            <div class="row">

                @foreach ($rooms as $item)
                    <div class="col-sm-4 appartment-block">
                        <div class="appartment-persons">{!! $item->capacity !!}</div>
                        <div class="appartment-spec">{{ $item->spec }}</div>
                        <div class="appartment-image"><img data-toggle="modal" data-target="#room{{ $item->id }}" src="/images/large/{{ $item->img_url.$item->image }}" class="img-responsive"></div>
                        <div class="appartment-title">{{ $item->name }}</div>
                        <div class="appartment-description">{{ $item->description }}</div>
                        <div class="appartment-button"><button data-toggle="modal" data-target="#room{{ $item->id }}" class="btn btn-info">Подробнее</button></div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="service_top"></div>
        <p>&nbsp;</p>
    </section>

    <section id="service">
        <div class="container">
            <p>&nbsp;</p>
            <div class="text-xl text-center">Услуги и удобства</div>
            <p>&nbsp;</p>
            <div class="row">
                <div class="col-lg-3 col-sm-4 service-block">
                    <div class="inner">
                        <div class="service-image"><img src="img/service-food.png" class=""></div>
                        <div class="service-title">Питание</div>
                        <div class="service-description">Отель Альградо рад предложить своим гостям богатый выбор блюд колоритной национальной и европейской кухни в нашем ресторане.</div>
                        <div class="service-button"><button data-toggle="modal" data-target="#serviceFood" class="btn btn-default">Подробнее</button></div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-4 service-block">
                    <div class="inner">
                        <div class="service-image"><img src="img/service-beach.png" class=""></div>
                        <div class="service-title">Пляжный отдых</div>
                        <div class="service-description">В отеле Альградо Вас ждет незабываемый пляжный отдых на оборудованном пляже, который находится в шаговой близости.<br><br></div>
                        <div class="service-button"><button data-toggle="modal" data-target="#serviceBeach" class="btn btn-default">Подробнее</button></div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-4 service-block">
                    <div class="inner">
                        <div class="service-image"><img src="img/service-pool.png" class=""></div>
                        <div class="service-title">Бассейн</div>
                        <div class="service-description">На территории гостиницы имеются два открытых подогреваемых плавательных бассейна  для взрослых и детей.<br><br></div>
                        <div class="service-button"><button data-toggle="modal" data-target="#servicePool" class="btn btn-default">Подробнее</button></div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-4 service-block">
                    <div class="inner">
                        <div class="service-image"><img src="img/service-kids.png" class=""></div>
                        <div class="service-title">Детский клуб / анимация</div>
                        <div class="service-description">Альградо - это мир в котором дети проводят вместе время.</div>
                        <div class="service-button"><button data-toggle="modal" data-target="#serviceKids" class="btn btn-default">Подробнее</button></div>
                    </div>
                </div>

                <div class="col-lg-3 col-lg-offset-3 col-sm-4 service-block">
                    <div class="inner">
                        <div class="service-image"><img src="img/service-event.png" class=""></div>
                        <div class="service-title">Торжества / мероприятия</div>
                        <div class="service-description">Это может быть пышное торжество, а может быть скромная церемония только для членов семьи, а затем ужин для близких родственников.</div>
                        <div class="service-button"><button data-toggle="modal" data-target="#serviceEvent" class="btn btn-default">Подробнее</button></div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-4 service-block">
                    <div class="inner">
                        <div class="service-image"><img src="img/service-wedding.png" class=""></div>
                        <div class="service-title">Свадебное предложение</div>
                        <div class="service-description">Альградо открывает свои двери навстречу свадьбе Bашей мечты. Команда специалистов своего дела превращает Bашу мечту о свадьбе в реальность.</div>
                        <div class="service-button"><button data-toggle="modal" data-target="#serviceWedding" class="btn btn-default">Подробнее</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="conditions_top"></div>
        <p>&nbsp;</p>
    </section>

    <section id="conditions">
        <div class="container">
            <p>&nbsp;</p>
            <div class="text-xl text-center">Условия проживания</div>
            <div>&nbsp;</div>
            <div>
                Наша главная цель — сделать Ваше размещение в гостинице Альградо комфортным и приятным. Если у Вас возникли какие-либо вопросы, пожалуйста, свяжитесь с сотрудниками напрямую.
            </div>
            <p>&nbsp;</p>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <div class="time text-center">
                        <div class="time-numbers">13.00 <img src="img/arrow.png"> 11.00</div>
                        время заезда &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; время выезда
                    </div>
                    <div class="registration-block">
                        <p><strong>Ранняя регистрация</strong></p>
                        <p>Пожалуйста, свяжитесь с отелем.</p>
                        <div>&nbsp;</div>
                        <p><strong>Поздняя выписка</strong></p>
                        <p>За выезд до 18.00 взимается плата в размере 50% от стоимости номера, за выезд после 18.00 взимается плата в размере 100% от стоимости номера</p>
                        <div>&nbsp;</div>
                        <p><strong>Отмена</strong></p>
                        <p>В случае отмены, изменения бронирования или незаезда, взимается штраф в размере 100% стоимости первых суток проживания.</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7">
                    <div class="conditions">
                        <dl class="">
                            <dt>Домашние животные</dt>
                            <dd>Размещение с домашними животными не предусмотрено</dd>
                            <dt>Курение</dt>
                            <dd>Согласно положению законодательства о запрете курения с 1 июня 2014 года курение на всей территории отеля запрещено. В случае курения в номере стоимость генеральной уборки составит 10000 рублей. Данная сумма будет добавлена отдельной строкой к Вашему счету за проживание</dd>
                            <dt>Алкоголь</dt>
                            <dd>Употребление алкогольных напитков в номерах и общественных зонах гостиничного комплекса категорически запрещено. Нарушение данного правила влечет за собой выселение из гостиницы без компенсации стоимости проживания</dd>
                            <dt>Бассейн</dt>
                            <dd>
                                Купание в бассейне в одежде не допускается. Пользование бассейном разрешено только в купальных костюмах.<br><br>
                                Купание в бассейне в ночное время запрещено.
                            </dd>
                        </dl>
                        <div class="condition"><img src="img/li.png"> Завтрак, обед и ужин включен в стоимость проживания только при предъявлении официанту карты гостя.</div>
                        <div class="condition"><img src="img/li.png"> Запрещается выносить из номеров гостиничного комплекса полотенца, простыни и прочие постельные принадлежности за пределы номера. Услуги прачечной в размере 5000 рублей будут добавлены отдельной строкой к Вашему счету за проживание.</div>
                        <div class="condition"><img src="img/li.png"> Дети дошкольного и младшего школьного возраста должны находиться у бассейна и на территории гостиничного комплекса в сопровождении взрослых.</div>
                    </div>
                </div>
            </div>

            <p>&nbsp;</p>
            <div id="gallery_top"></div>
            <p>&nbsp;</p>
        </div>
    </section>

    <section id="gallery">
        <div class="container-fluid">
            <p>&nbsp;</p>
            <div class="text-xl text-center">Фотогалерея</div>
            <p>&nbsp;</p>
            <div class="row gallery-photos">
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_01.jpg" title="Закат на берегу Каспийского моря"><img src="img/icon_01.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_02.jpg" title="Беседки"><img src="img/icon_02.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_03.jpg" title="Вечер во дворе отеля"><img src="img/icon_03.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_04.jpg" title="Вид с пентхауса"><img src="img/icon_04.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_05.jpg" title="Наш бассейн"><img src="img/icon_05.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_06.jpg" title="Наш прекрасный дворик"><img src="img/icon_06.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_07.jpg" title="Бассейн"><img src="img/icon_07.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_08.jpg" title="Бассейн"><img src="img/icon_08.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_09.jpg" title="Невеста"><img src="img/icon_09.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_10.jpg" title="Дворик"><img src="img/icon_10.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_11.jpg" title="Невеста"><img src="img/icon_11.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_12.jpg" title="Вид отеля со двора"><img src="img/icon_12.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_13.jpg" title="Невеста"><img src="img/icon_13.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_01.jpg" title="Закат на берегу Каспийского моря"><img src="img/icon_01.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_02.jpg" title="Беседки"><img src="img/icon_02.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_03.jpg" title="Вечер во дворе отеля"><img src="img/icon_03.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_04.jpg" title="Вид с пентхауса"><img src="img/icon_04.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_05.jpg" title="Наш бассейн"><img src="img/icon_05.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_06.jpg" title="Наш прекрасный дворик"><img src="img/icon_06.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_07.jpg" title="Бассейн"><img src="img/icon_07.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_04.jpg" title="Вид с пентхауса"><img src="img/icon_04.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_05.jpg" title="Наш бассейн"><img src="img/icon_05.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_06.jpg" title="Наш прекрасный дворик"><img src="img/icon_06.jpg" class="img-responsive"></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-3"><a class="gallery" href="img/photo_07.jpg" title="Бассейн"><img src="img/icon_07.jpg" class="img-responsive"></a></div>
            </div>
            <p>&nbsp;</p>
            <div id="map_top"></div>
            <p>&nbsp;</p>
        </div>
    </section>

    <section>
        <p>&nbsp;</p>
        <div class="text-xl text-center">Мы на карте</div>
        <p>&nbsp;</p>

        <div id="map" style="height: 500px;"></div>
        <script>

            function initMap() {
                var myLatLng = {lat: 43.079617, lng: 47.465967};

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 12,
                    center: myLatLng
                });

                var contentString = '<p><strong>Отель Альградо</strong></p><p>Мы находимся на Сулакской трассе на расстоянии 7 км от выездного поста г. Махачкалы. Поворот в сторону моря напротив населенного пункта Новолак.</p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'Отель Альградо',
                    message: 'Отель Альградо'
                });
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtZm-o3f_5NI0Q7gZpajuayVwyN6qVD_I&callback=initMap">
        </script>

        <div id="contacts_top"></div>
    </section>

    <footer id="contacts">
        <div class="container">
            <p>&nbsp;</p>
            <div class="text-xl text-center">Наши контакты</div>
            <p>&nbsp;</p>
            <div class="row">
                <div class="col-sm-7 contacts-info">
                    <dl class="dl-horizontal">
                        <dt>Телефон:</dt>
                        <dd>+7 929 881-93-07</dd>
                        <dd><small><em>многоканальный телефон для бронирования номеров и получения информации</em></small></dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Email:</dt>
                        <dd>om@alrado.ru</dd>
                        <dd><small><em>для групповых бронирований и организации мероприятий</em></small></dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Email:</dt>
                        <dd>reservation@alrado.ru</dd>
                        <dd><small><em>для индивидуальных бронирований</em></small></dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Адрес:</dt>
                        <dd>Мы находимся на Сулакской трассе на расстоянии 7 км от выездного поста г. Махачкалы. Поворот в сторону моря напротив населенного пункта Новолак.</dd>
                    </dl>
                </div>
                <div class="col-sm-5">
                    <form action="{{ route('feedback') }}" method="POST" name="form_feedback" id="form_feedback">
                        {{ csrf_field() }}
                        <div class="form-status"></div>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Представьтесь">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control input-lg" placeholder="Ваш email или телефон">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control input-lg" placeholder="Ваше сообщение" style="height: 250px;"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-block btn-info form-button">Отправить сообщение</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </footer>

    <section id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    разработано jambik@gmail.com
                </div>
                <div class="col-sm-5">
                    {!! $blocks['copyright']->text !!}
                </div>
            </div>
        </div>
    </section>
</div>


{{-- Номера --}}
@include('partials._rooms')

{{-- Услуги --}}
@include('partials._services')

<!-- Форма бронирования -->
@include('partials._reservation')

<!-- Форма обратной связи -->
@include('partials._callback')

@include('partials._flash')
@include('partials._metrika')

@yield('footer_scripts')

</body>
</html>