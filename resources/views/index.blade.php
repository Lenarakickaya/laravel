
            @extends('layouts.app')

            @section('content')
            <section class="section" id="vialogistic">
                <h1>...Транспортная компания VIA LOGISTIC нв рынке грузоперевозок с 2002 года.
                    Вот уже более 20 лет мы успешно работаем на отчественном рынке,  
                    осуществляем доставку грузов в страны СНГ и дальнего зарубежья.</h1>
            </section>
            
            <marquee bahavior="scroll"> VIALOGISTIC Индивидуальный подход! Доставка в срок! Безопасность! 
                тел.3334442 для всех абонентов ...Вот уже более 5 лет мы успешно работаем для Вас....</marquee>
            
            <div class="containers"> 

                <div class=" big box1">
                   <p>Международные грузоперевозки</p>
                </div>

                <div class="big box2">
                    <p>Перевозка и доставка сборных грузов по РБ</p>
                </div>

                <div class="big box3">
                    <p>Хранение груза</p>
                </div>
            </div>   

            <div class="carusel">
                <div class="image-one prev">
                    <img src="images/kollektiv.jpg">
                </div>
                <div class="image-one center">
                    <img src="images/kollektiv_mnogo.jpg">
                </div>
                <div class="image-one next">
                    <img src="images/kollectiv_rabota.jpg">
                </div>
                <div class="image-one after-next">
                    <img src="images/kollectiv_ura.jpg">
                </div>
            </div>

            <div class="divcontainer">
                
                    <ul>
                        <li>Международные грузоперевозки.<br>
Автомобильные грузоперевозки по СНГ осуществляются в прямом и обратном попутном сообщении между городами России, Беларуси и Кахастана в соответствии с международными
правилами и нормами, а также законодательством Республики Беларусь.</li>
                        <li>Перевозка и доставка сборных грузов по РБ.
Наше главное преимущество - короткие сроки организации перевозок на взаимовыгодных условиях.
При формировании партий сборного груза клиент оплпчивает только объем автомобильного транспорта, который занят грузом.</li>
                    </ul>
                <!---<p>Для того чтобы стать нашим клиентом, необходимо заключить договор транспортной экспедиции и заполнить заявку на перевозку.
Мы разработаем оптимальный маршрут, учитывая все особенности доставки Вашего груза.<br></p>-->

                     
               <!----<p>Наша компания не доставляет грузы, которые относятся  к категории опасных,
скоропортящихся или требуют особых температурных условий!</p> -->  
            
                    
               <!-- <p>Рассчитать стоимость услуг можно с помощью ОНЛАЙН ЗАЯВКИ.</p>-->
            </div>
            <div class="container1">
                <form method="post" action="form.php">
                    <div>
                        <label for="otkuda">Откуда</label>                 <!--метка, связыв.текст с формой-->
                        <input type="text" name="otkuda" required>         <!--элемент формы-->

                        <label for="kuda">Куда</label>
                        <input type="text" name="kuda" required>
                    </div>

                    <div>
                        <label for="ves">Вес</label>
                        <input type="text" name="ves" required>

                        <label for="obem">Объём</label>
                        <input type="text" name="obem" required>
                    </div>

                    <div>
                        <label for="tel">Ваш телефон</label>
                        <input type="text" name="tel" required>
                    </div>

                    <button type="submit">Узнать стоимость</button>         <!--кнопка отправки данных формы-->
                </form>
                <div class="tar">
                    
                    <div class="max tarif"><img src="images/karta.png"/>

                        <!--<ul>Преимущества работы с VIA LOGISTIC:
                            <li>сбор мелких партий груза от 1 кг</li>
                            <li>хранение груза на складе до 5-ти дней бесплатно</li>
                            <li>доставка груза до двери</li>
                        </ul>
                        <ul>Тариф формируется исходя из следующих фактоpов:
                            <li>Пункт назначения</li>
                            <li>Объем и вес партии груза</li>
                            <li>Тип перевозимого груза</li>
                            <li>Вид и тип транспорта, которым осуществляется перевозка</li>
                            <li>Предоставление дополнительных услуг</li>
                        </ul>-->
                    </div>
                </div>
            </div>
        @endsection