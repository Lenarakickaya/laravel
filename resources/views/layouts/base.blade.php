<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="международная доставка грузов, международные перевозки и доставка грузов, 
международные автомобильные перевозки, международные перевозки из России, логистика, 
международные перевозки грузов, международные перевозки">
        <meta name="description" content="Организация международных перевозок грузов автомобильным транспортом. 
Надежно! Широкая география перевозок! Индивидуальный подход! 
Доставка в срок! Безопасность!">
        <meta name="viewport" content="width=device-widht,initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
       <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
        <title>VIA LOGISTIC надежная транспортная компания! Быстрая доставка</title> 
        
        <link rel="stylesheet" href="/style.css"> <!--Cтили scc-->
        <script src="/jquery-3.7.1.min.js"></script>
        <script src="/index.js"></script>
        <link rel="icon" href="favicon.png">  <!-- Иконка -->
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">
    </head>
    <body>
        <header> 
        <a href="/blogs">{{__('menu.news')}}</a>
            <div class="container">
                <img src="favicon.png" alt="Логотип">
                <nav class="fixed-nav">
                    <div class="dropdown">
                        <button class="dropbtn">{{__('menu.servises')}}</button>
                        <div class="dropdown-content">
                            <a href="/services">{{__('menu.service_menu.bas')}}</a>
                            <a href="/grafik">{{__('menu.service_menu.vls')}}</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="dropbtn">{{__('menu.documents')}}</button>
                        <div class="content-dropdown">
                            <a href="pages/CMR.doc">Бланк CMR</a>
                            <a href="pages/dogovor.doc">Договор транспортной экспедиции</a>
                            <a href="pages/pismo.doc">Изменение плательщика</a>
                            <a href="pages/opis.doc">Опись груза</a>
                        </div>
                    </div>
                    <a href="/contacts" class="button">КОНТАКТЫ</a>
                    <a href="tel:+375293334442,+375333334442,+375253334442" class="button">ПОЗВОНИТЕ НАМ</a>
                </nav>
                <button class="btn glass">ЯЗЫК
                <!--<ul class="menu menu-horizontal px-4">-->
                    <li>
                        <details>
                            <summary>
                                {{App::getlocale()}}
                            </summary>
                            <ul class="p-2 bg-base-100 rounded-t-none">
                            <li><a href = "/?lang=en">EN</a></li>
                            <li><a href = "/?lang=ru">RU</a></li>
                            </ul>
                        </details>
                    </li>
            </button>
                <!--</ul>-->
            </div>
               

        </header>
        
        <main>
            
            @yield('content')
        </main>
        
        <footer>
            <div class="containerdiv">
                2023 VIA LOGISTIC <br>
                Международные перевозки
            </div>
        </footer>
    </body>
</html>