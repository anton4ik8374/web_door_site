<!DOCTYPE html>
<html>
<head>
    <title>Маршрут от точки на карте</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--
        Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
        Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
    -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=fd657f9d-d567-4e57-8358-1d9c6ce2aab0"
            type="text/javascript"></script>
    <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
    <script>
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                center: [60.031256, 30.138675],
                zoom: 16,
                // Добавим панель маршрутизации.
                controls: ['routePanelControl']
            });

            var control = myMap.controls.get('routePanelControl');

            control.options.set({
                autofocus: false
            });
            // Зададим состояние панели для построения машрутов.
            control.routePanel.state.set({
                // Тип маршрутизации.
                type: 'masstransit',
                // Выключим возможность задавать пункт отправления в поле ввода.
                fromEnabled: true,
                // Адрес или координаты пункта отправления.
                //from: 'Москва, Льва Толстого 16',
                // Включим возможность задавать пункт назначения в поле ввода.
                toEnabled: false,
                // Адрес или координаты пункта назначения.
                to: 'Юнтоловский проспект, д.45, корп. 2'
            });

            // Зададим опции панели для построения машрутов.
            control.routePanel.options.set({
                // Запрещаем показ кнопки, позволяющей менять местами начальную и конечную точки маршрута.
                allowSwitch: true,
                // Включим определение адреса по координатам клика.
                // Адрес будет автоматически подставляться в поле ввода на панели, а также в подпись метки маршрута.
                reverseGeocoding: false,
                // Зададим виды маршрутизации, которые будут доступны пользователям для выбора.
                types: {auto: true, masstransit: true, pedestrian: true, taxi: true}
            });

            // Создаем кнопку, с помощью которой пользователи смогут менять местами начальную и конечную точки маршрута.
            var switchPointsButton = new ymaps.control.Button({
                data: {content: "Поменять местами", title: "Поменять точки местами"},
                options: {selectOnClick: false, maxWidth: 160}
            });
            // Объявляем обработчик для кнопки.
            switchPointsButton.events.add('click', function () {
                // Меняет местами начальную и конечную точки маршрута.
                control.routePanel.switchPoints();
            });
            myMap.controls.add(switchPointsButton);
            // Создаем многоугольник, круг и прямоугольник.
            polygon = new ymaps.GeoObject({
                    geometry: {
                        type: "Polygon",
                        coordinates: [[[60.03342458021186, 30.14872812204431], [60.03411716123098, 30.147513608424536], [60.034697004054166, 30.146084518083548], [60.03480447518615, 30.14469834308675], [60.0340825005317, 30.132789335060718], [60.03304916346447, 30.12754293422759], [60.03240230481192, 30.126716813850994], [60.02927787902863, 30.13188811283162], [60.03078107619601, 30.13660880069788], [60.02836098341822, 30.139102702022583], [60.02841046503436, 30.14254074092062], [60.02818729790318, 30.14315117845787], [60.02802014250914, 30.143642492680293], [60.02800796420336, 30.144067221650015], [60.02819836267166, 30.14448752614709], [60.028514730669876, 30.14494189704319], [60.028288453529534, 30.147824744670242], [60.03028403061135, 30.149770974287193], [60.03342458021186, 30.14872812204431]]]

                    }
                },
                {
                    // Описываем опции геообъекта.
                    // Цвет заливки.
                    fillColor: '#319b41',
                    // Цвет обводки.
                    strokeColor: '#0000FF',
                    // Общая прозрачность (как для заливки, так и для обводки).
                    opacity: 0.3,
                    // Ширина обводки.
                    strokeWidth: 2,
                    // Стиль обводки.
                    strokeStyle: 'solid'
                });
            collection = new ymaps.GeoObjectCollection();
            // Добавляем геообъекты в коллекцию.
            collection.add(polygon);
            // Добавляем коллекцию на карту.
            myMap.geoObjects.add(collection);
        });
    </script>
    <style>
        .header-ya {
            color: #33b874;
            font-family: 'MuseoSansCyrl', Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;
            margin-bottom: 5px;
        }

        .text-description-ya {
            font-family: 'MuseoSansCyrl', Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;
            color: gray;
            font-size: 26px;
            margin-top: 5px;
        }

        #map {
            width: 95%;
            height: 344px;
            padding: 0;
            margin: 0 10px 0 0;
        }

        .block-map {
            width: 60%;
        }

        .block-frame {
            width: 30%;
        }

        .container-text {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-end;
            box-sizing: border-box;
            padding: 0 10%;
        }

        .container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        iframe {
            width: 100%;
            border: none;
        }

        @media (min-width: 320px) and (max-width: 991px) {
            .header-ya {
                font-size: 4em;
            }

            .text-description-ya {
                font-size: 2em;
            }

            .container-text {
                padding: 0 1%;
            }

            #map {
                width: 100%;
                height: 60vh;
                padding: 0;
                margin: 0;
            }

            .block-map {
                width: 100% !important;
            }

            .block-frame {
                width: 100% !important;
                margin-top: 50px;
            }

            .container {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }

            iframe {
                width: 100%;
                border: none;
            }

        }
        .my-test{
            height: 1000px;
            width: 100%;
            display: block;
            background:slategray;
        }
    </style>
</head>
<body>
<div class="my-test">

</div>
<div class="container">
    <div class="container-text">
        <h1 class="header-ya">10 минут до КАД</h1>
        <p class="text-description-ya">Укажите своё местоположение для определения маршрута</p>
    </div>
    <div class="container">
        <div class="block-map">
            <div id="map"></div>
        </div>
        <div class="block-frame">
            <iframe src="https://yandex.ru/map-widget/v1/-/CGSqq8ls" width="100%" height="344" frameborder="1"
                    allowfullscreen="true"></iframe>
        </div>
    </div>
</div>
</body>
</html>