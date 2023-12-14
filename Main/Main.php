<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Jost" rel="stylesheet">
    <link rel="stylesheet" href="Main.css">
    <title>Головна</title>
</head>
<body>

    <?php
    session_start();
    if (isset($_SESSION['user'])) {
    $Name = $_SESSION['user'];
    $Con = mysqli_connect('localhost','root','','ecommerce');
    $rows = mysqli_query($Con ,"SELECT * FROM `tbluser` WHERE (BINARY UserName = '$Name' OR BINARY Email = '$Name') ");
    $stroka = mysqli_fetch_array($rows, MYSQLI_ASSOC);
    $username = $stroka['UserName'];
    }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>

    <!--<script>
    $(function() {
    $('<a name="top"/>').insertBefore($('body').children().eq(0));
    window.location.hash = 'top';
    });
    </script>-->

    <div class="wrapper">
        <img src="../main/image/Beru__3_-removebg-preview 1.png" class="icon">
        <a href="#header" class="gbutton">Головна</a>
        <a href="#rental" class="pobutton">Поїздка</a>
        <a href="#park" class="abutton">Автопарк</a>
        <a href="#conditions" class="ubutton">Умови оренди</a>
        <a href="#aboutus" class="prbutton">Про нас</a>

        <?php
                if (isset($_SESSION['user'])) {
                    $_SESSION['user']=$username;
            ?>    
                    <div style="position: absolute; width: 300px; left: 930px; top: 37px; text-decoration: none; font-family: 'Jost'; font-style: normal; font-weight: 400; font-size: 24px; line-height: 35px; text-align: right; color: black;"><?= $_SESSION['user'];?></div>
            <?php
                echo '<a href="../user/form/logout.php"<div class="signinbutton">
                <p class="signout">Вийти</p>
                </div></a>';
 
            }
            else{
                echo '<a href="../user/form/registration.php"><div class="signupbutton">
                <p class="signup">Реєстрація</p>
                </div></a>';
                echo '<a href="../user/form/login.php"<div class="signinbutton">
                <p class="signin">Авторизація</p>
                </div></a>';

            }
        ?>



    </div> 

<main class="container">
        <section id="header">
    <div class="header">
        <div class="htext">
            <p class="htext1">Потрібне <span style="color: #120083;">авто?Орендуй</span> його</p>
            <p class="htext2"><b>Beru</b> - ви нам гроші, ми вам транспорт</p>
            <img src="../main/image/downvote-solid-49 1.png" class="downvote">
        </div>
        <div class="bluerec">
            <img src="../main/image/jakob-rosen-ojy_mzQ1q6c-unsplash_(2)-transformed 1.png" class="subaru">
        </div>
    </div>
    </section>
    <div id="rental" class="rental">
    <div  class="rentalconditions">
        <p class="rentaltext1">Орендуйте авто за допомогою <br>3 кроків<p>
    
        <div class="conditionsone">
            <div class="bluerect">
                <img src="../main/image/select-multiple-regular-60.png" class="miniicon">
                <img src="../main/image/right-arrow-alt-regular-60.png" class="rightarrow">
                <p class="contionstextone">Виберіть потрібний ТЗ з автопарку, який розташований нижче</p>
            </div>
        </div>

        <div class="conditionstwo">
            <div class="bluerect">
                <img src="../main/image/location-plus-regular-60.png" class="miniicon">
                <img src="../main/image/right-arrow-alt-regular-60.png" class="rightarrow">
                <p class="contionstextone">Розгляньте інформацію авто, якщо все влаштовує то клацніть “Замовити”  </p>
            </div>
    
        </div>

        <div class="conditionsthree">
            <div class="bluerect">
                <img src="../main/image/send-regular-60.png" class="miniicon">
                <p class="contionstextone">Заповніть форму та очікуйте дзвінок операторів в роб. час</p>
            </div>
    
        </div>
    </div>
    </div>


    <div id="park" class="parking">
    <div class="park">
        <div class="autorectangleblue">
            <p class="autorectanglebluetext">Автопарк</p>
            <img src="../main/image/down-arrow-circle-solid-60.png" class="autorectanglebluearrow">
        </div>

        <a href="../park/1. Renault_Logan/Renault_Logan.php"><div class="car1">
            <img src="../main/image/DSC_0283-825x510 1.png" class="carimage">
            <p class="carbrand">Renault Logan 1.0 - 1.2 МКПП</p>
            <div class="carcharacteristics">

                <div class="carcharacteristics1">
                    <img src="../main/image/engine 1.png" class="caricon1">
                    <p class="caricontext">1.2 л</p>
                </div>

                <div class="carcharacteristics2">
                    <img src="../main/image/passenger 1.png" class="caricon2">
                    <p class="caricontext">5 чол.</p>
                </div>

                <div class="carcharacteristics3">
                    <img src="../main/image/fuel 1.png" class="caricon3">
                    <p class="caricontext">Бензин (A95)</p>
                </div>

                <div class="carcharacteristics4">
                    <img src="../main/image/conditioner 1.png" class="caricon4">
                    <p class="caricontext">Кондиціонер</p>
                </div>

                <div class="carcharacteristics5">
                    <img src="../main/image/transmission 1.png" class="caricon5">
                    <p class="caricontext5">Механіка</p>
                </div>

                <div class="carcharacteristics6">
                    <img src="../main/image/fuel consumption 1.png" class="caricon6">
                    <p class="caricontext6">7.8 л / 100 км</p>
                </div>

            </div>

        </div>
    </a>


    <a href="../park/2. Ford_Focus/Ford_Focus.php"><div class="car2">
            <img src="../main/image/IMG_1173_new-600x350 1.png" class="carimage">
            <p class="carbrand">Ford Focus Auto 2.0</p>
            <div class="carcharacteristics">

                <div class="carcharacteristics1">
                    <img src="../main/image/engine 1.png" class="caricon1">
                    <p class="caricontext">2.0 л</p>
                </div>

                <div class="carcharacteristics2">
                    <img src="../main/image/passenger 1.png" class="caricon2">
                    <p class="caricontext">5 чол.</p>
                </div>

                <div class="carcharacteristics3">
                    <img src="../main/image/fuel 1.png" class="caricon3">
                    <p class="caricontext">Бензин (A95)</p>
                </div>

                <div class="carcharacteristics4">
                    <img src="../main/image/conditioner 1.png" class="caricon4">
                    <p class="caricontext">Кондиціонер</p>
                </div>

                <div class="carcharacteristics5">
                    <img src="../main/image/transmission 1.png" class="caricon5">
                    <p class="caricontext5">Авто</p>
                </div>

                <div class="carcharacteristics6">
                    <img src="../main/image/fuel consumption 1.png" class="caricon6">
                    <p class="caricontext6">7.7 л / 100 км</p>
                </div>

            </div>

        </div>
    </a>


    <a href="../park/3. Toyota_Camry_XSE/Toyota_Camry_XSE.php"><div class="car3">
            <img src="../main/image/DSC_0560-600x350 1.png" class="carimage">
            <p class="carbrand">Toyota Camry XSE 3.5</p>
            <div class="carcharacteristics">

                <div class="carcharacteristics1">
                    <img src="../main/image/engine 1.png" class="caricon1">
                    <p class="caricontext">3.5 л</p>
                </div>

                <div class="carcharacteristics2">
                    <img src="../main/image/passenger 1.png" class="caricon2">
                    <p class="caricontext">5 чол.</p>
                </div>

                <div class="carcharacteristics3">
                    <img src="../main/image/fuel 1.png" class="caricon3">
                    <p class="caricontext">Бензин (A95)</p>
                </div>

                <div class="carcharacteristics4">
                    <img src="../main/image/conditioner 1.png" class="caricon4">
                    <p class="caricontext">Кондиціонер</p>
                </div>

                <div class="carcharacteristics5">
                    <img src="../main/image/transmission 1.png" class="caricon5">
                    <p class="caricontext5">Механіка</p>
                </div>

                <div class="carcharacteristics6">
                    <img src="../main/image/fuel consumption 1.png" class="caricon6">
                    <p class="caricontext6">9.1 л / 100 км</p>
                </div>

            </div>

        </div>
    </a>


    <a href="../park/4. Kia_Sportage/Kia_Sportage.php"><div class="car4">
            <img src="../main/image/DSC_0643-600x350 1.png" class="carimage">
            <p class="carbrand">Kia Sportage</p>
            <div class="carcharacteristics">

                <div class="carcharacteristics1">
                    <img src="../main/image/engine 1.png" class="caricon1">
                    <p class="caricontext">1.6 л</p>
                </div>

                <div class="carcharacteristics2">
                    <img src="../main/image/passenger 1.png" class="caricon2">
                    <p class="caricontext">5 чол.</p>
                </div>

                <div class="carcharacteristics3">
                    <img src="../main/image/fuel 1.png" class="caricon3">
                    <p class="caricontext">Бензин (A95)</p>
                </div>

                <div class="carcharacteristics4">
                    <img src="../main/image/conditioner 1.png" class="caricon4">
                    <p class="caricontext">Кондиціонер</p>
                </div>

                <div class="carcharacteristics5">
                    <img src="../main/image/transmission 1.png" class="caricon5">
                    <p class="caricontext5">Механіка</p>
                </div>

                <div class="carcharacteristics6">
                    <img src="../main/image/fuel consumption 1.png" class="caricon6">
                    <p class="caricontext6">7.8 л / 100 км</p>
                </div>

            </div>

        </div>
    </a>


    <a href=""><div class="car5">
            <img src="../main/image/DSC_0431-600x350 1.png" class="carimage">
            <p class="carbrand">Skoda Fabia 1.2 Manual</p>
            <div class="carcharacteristics">

                <div class="carcharacteristics1">
                    <img src="../main/image/engine 1.png" class="caricon1">
                    <p class="caricontext">1.2 л</p>
                </div>

                <div class="carcharacteristics2">
                    <img src="../main/image/passenger 1.png" class="caricon2">
                    <p class="caricontext">5 чол.</p>
                </div>

                <div class="carcharacteristics3">
                    <img src="../main/image/fuel 1.png" class="caricon3">
                    <p class="caricontext">Бензин (A95)</p>
                </div>

                <div class="carcharacteristics4">
                    <img src="../main/image/conditioner 1.png" class="caricon4">
                    <p class="caricontext">Кондиціонер</p>
                </div>

                <div class="carcharacteristics5">
                    <img src="../main/image/transmission 1.png" class="caricon5">
                    <p class="caricontext5">Механіка</p>
                </div>

                <div class="carcharacteristics6">
                    <img src="../main/image/fuel consumption 1.png" class="caricon6">
                    <p class="caricontext6">4.8 л / 100 км</p>
                </div>

            </div>

        </div>
    </a>


    <a href=""><div class="car6">
            <img src="../main/image/DSC_0010-600x350 1.png" class="carimage">
            <p class="carbrand">Audi A5 2.0 TFSI Quattro</p>
            <div class="carcharacteristics">

                <div class="carcharacteristics1">
                    <img src="../main/image/engine 1.png" class="caricon1">
                    <p class="caricontext">2.0 л</p>
                </div>

                <div class="carcharacteristics2">
                    <img src="../main/image/passenger 1.png" class="caricon2">
                    <p class="caricontext">5 чол.</p>
                </div>

                <div class="carcharacteristics3">
                    <img src="../main/image/fuel 1.png" class="caricon3">
                    <p class="caricontext">Бензин (A95)</p>
                </div>

                <div class="carcharacteristics4">
                    <img src="../main/image/conditioner 1.png" class="caricon4">
                    <p class="caricontext">Кондиціонер</p>
                </div>

                <div class="carcharacteristics5">
                    <img src="../main/image/transmission 1.png" class="caricon5">
                    <p class="caricontext5">Авто</p>
                </div>

                <div class="carcharacteristics6">
                    <img src="../main/image/fuel consumption 1.png" class="caricon6">
                    <p class="caricontext6">8.0 л / 100 км</p>
                </div>

            </div>

        </div>
    </a>


    <a href=""><div class="car7">
            <img src="../main/image/DSC_0426-600x350 1.png" class="carimage">
            <p class="carbrand">Hyundai H1 2.5 diesel</p>
            <div class="carcharacteristics">

                <div class="carcharacteristics1">
                    <img src="../main/image/engine 1.png" class="caricon1">
                    <p class="caricontext">2.5 л</p>
                </div>

                <div class="carcharacteristics2">
                    <img src="../main/image/passenger 1.png" class="caricon2">
                    <p class="caricontext">7+1 чол.</p>
                </div>

                <div class="carcharacteristics3">
                    <img src="../main/image/fuel 1.png" class="caricon3">
                    <p class="caricontext">Дизель</p>
                </div>

                <div class="carcharacteristics4">
                    <img src="../main/image/conditioner 1.png" class="caricon4">
                    <p class="caricontext">Кондиціонер</p>
                </div>

                <div class="carcharacteristics5">
                    <img src="../main/image/transmission 1.png" class="caricon5">
                    <p class="caricontext5">Авто</p>
                </div>

                <div class="carcharacteristics6">
                    <img src="../main/image/fuel consumption 1.png" class="caricon6">
                    <p class="caricontext6">8.8 л / 100 км</p>
                </div>

            </div>

        </div>
    </a>


    <a href="https://www.youtube.com/results?search_query=jquery+%D1%87%D1%82%D0%BE+%D1%8D%D1%82%D0%BE"><div class="car8">
            <img src="../main/image/DSC_0951-600x350 1.png" class="carimage">
            <p class="carbrand">Peugeot 2008 1.2</p>
            <div class="carcharacteristics">

                <div class="carcharacteristics1">
                    <img src="../main/image/engine 1.png" class="caricon1">
                    <p class="caricontext">1.2 л</p>
                </div>

                <div class="carcharacteristics2">
                    <img src="../main/image/passenger 1.png" class="caricon2">
                    <p class="caricontext">5 чол.</p>
                </div>

                <div class="carcharacteristics3">
                    <img src="../main/image/fuel 1.png" class="caricon3">
                    <p class="caricontext">Бензин (A95)</p>
                </div>

                <div class="carcharacteristics4">
                    <img src="../main/image/conditioner 1.png" class="caricon4">
                    <p class="caricontext">Кондиціонер</p>
                </div>

                <div class="carcharacteristics5">
                    <img src="../main/image/transmission 1.png" class="caricon5">
                    <p class="caricontext5">Авто</p>
                </div>

                <div class="carcharacteristics6">
                    <img src="../main/image/fuel consumption 1.png" class="caricon6">
                    <p class="caricontext6">5.0 л / 100 км</p>
                </div>

            </div>

        </div>
    </a>


    </div>
    </div>

    <div id="conditions" class="conditionsrental">
    <div class="conditions">

        <p class="conditionsheadline">Умови оренди</p>

        <div class="conditionsall">
        <p class="conditiontext1">Що знадобиться вам для оренди?</p>
        <p class="conditiontext2"><b>· Паспорт</b>  . Прокат авто без водія можливий лише в тому випадку, якщо вам виповнився 21 рік. Орендувати машину бізнес- і представницького класів можливо, якщо вам 25+ років.
            <br><b>· Ідентифікаційний код</b> – для громадян України.
            <br><b>· Водійське посвідчення</b> (діє на території України).
            <br><b>· Заставна сума</b>. Ми приймаємо як готівку, так і оплату за допомогою банківських карт Visa і Master Card (заморозка коштів на карті клієнта).
            <br><b>·</b> Менеджер може запитати додаткові документи, які підтверджують особистість. Наприклад, іменна <b>банківська карта</b>, <b>закордонний паспорт</b> і т.п. </p>
        </div>

        <div class="conditionsicons">

            <div class="conditionsmaket">

                <div class="conditionsmaket1">
                    <img src="../main/image/129052 1.png" class="conditionsmaket1icon">
                </div>

                <div class="conditionsmaket2">
                    <img src="../main/image/driver-license-card 1.png" class="conditionsmaket2icon">
                </div>

                <div class="conditionsmaket3">
                    <img src="../main/image/illustration-of-give-money-icon-on-transparent-background-free-png 1.png" class="conditionsmaket3icon">
                </div>

                <div class="conditionsmaket4">
                    <img src="../main/image/3596097 1.png" class="conditionsmaket4icon">
                </div>

                <div class="conditionsmaket5">
                    <img src="../main/image/1200px-Icon-round-Question_mark 1.png" class="conditionsmaket5icon">
                </div>
            </div>
        </div>

        <div class="conditionsproccess">
            <p class="conditionproccesstext1">Загальні умови і процедура видачі авто напрокат</p>
            <p class="conditionproccesstext2"><b>·</b> Оплата послуг відбувається до початку оренди. При подовженні терміну оренди, оплата також відбувається наперед.
                <br><b>·</b> Тарифи на прокат автомобіля і додаткові послуги вказані в доларах США.
                <br><b>·</b> Доба прокату авто закінчується через 24 години з моменту фактичного отримання авто. Час роботи офісу до 18:00.
                <br><b>·</b> Обмеження пробігу за добу – 350 км (середньодобовий ліміт). Загальний ліміт розраховується за формулою 350 км * кількість діб оренди. Перепробіг оплачується окремо.
                <br><b>·</b> Клієнт залишає заставу за автомобіль і робить повну оплату за послуги перед початком оренди (у момент підписання договору прокату). Сума застави і сума оплати вказана в акті прийому-передачі. У випадку повернення авто у вихідному стані і у встановлений за договором строк, застава повертається клієнту негайно і в тому самому об’ємі!
                <br><b>·</b> Застава – це сума стандартної відповідальності клієнта за час прокату машини. Для зменшення суми відповідальності (суми застави) пропонується придбати додаткову страховку (ознайомитись з умовами і цінами можна тут: умови додаткового страхування при оренді авто). 
                <br><b>·</b> Всі автомобілі видаються напрокат у чистому вигляді. 
                <br><b>·</b> Перед прокатом, співробітник компанії, робить фотографії кузова і салона автомобіля і описує наявні пошкодження в акті прийому-передачі авто.
                <br><b>·</b> Стандартна комплектація авто: запасне колесо, балонний ключ, буксирувальний гак, знак аварійної зупинки, аптечка, вогнегасник, шини по сезону (зимові/літні). За попереднім замовленням, автомобіль може бути укомплектований додатково: GPS-навігатором, дитячим кріслом, wi-fi роутером
            </p>
            </div>

            <div class="overmileage">
                <p class="overmileagetext1">Тарифи на перепробіг (ціна за 10 км)</p>
                <p class="overmileagetext2"><b>·</b> економ-клас – 1 дол;
                    <br><b>·</b> середній клас – 1,5 дол;
                    <br><b>·</b> бізнес-клас і позашляховики (SUV, об’ємом двигуна до 2,5 л) – 2,0 дол;
                    <br><b>·</b> преміум-клас і позашляховики (об’ємом двигуна більше 2,5 л) – від 2,5 до 10,0 дол;
                    <br><b>·</b> Також у нашій компанії ви можете замовити послугу прокату авто з безлімітним пробігом. Вартість пакету «безлімітний пробіг» уточнюйте у менеджерів компанії.
                    <br>Автомобіль перевіряється на перепробіг після закінчення оренди, тому в разі перепробігу проводиться окрема доплата за формулою: кількість км (округлюється до десятків) * тариф класу.
                </p>

                <div class="overmileagemaket">
                    <div class="overmileagemaketellipse">
                        <img src="../main/image/speedometer-icon 1.png" class="overmileagemaketellipseicon">
                    </div>

                    <p class="overmileagemakettext1">Ліміт пробігу 350 км/доба</p>
                    <p class="overmileagemakettext2">Ліміт пробігу орендованого авто 
                        <br>рахується сумарно за всі дні прокату 
                        <br>Наприклад, на 7 днів це 2450 км.</p>

                </div>
            </div>
        </div>
    </div>

    <div id="aboutus" class="aboutus">
            <p class="aboutusheadline">Про нас</p>
            <p class="aboutustext1">Приїжджаючи до Чернівців у справах чи в якості туриста, багато хто стикається з проблемою вільного пересування містом. Короткострокова або тривала оренда авто в компанії Beru – це найкраща альтернатива громадському транспорту або таксі. До того ж, ви отримуєте повну свободу пересування: можете самостійно планувати маршрут і не залежати від розкладу автобусів або часу подачі машини.
                Наша компанія молода, тому працює в цьому сегменті ринку лиш рік. Оформити заявку та взяти напрокат авто в м. Чернівці можна, зателефонувавши до нашого офісу або заповнивши форму при оренді авто. Не втрачайте унікальний шанс недорого зняти машину потрібного вам класу з водієм або без нього!
            </p>
            <div class="aboutusmaket">
                <img src="../main/image/Снимок экрана 2023-05-11 192954 1.png" class="aboutusmap">
            </div>

            <p class="aboutustext2">Чим ми відрізняємося від інших?</p>
            <p class="aboutustext3">Наша місія – робити послугу автопрокату комфортною як для бізнесу, так і для сім’ї. Спрощувати життя клієнтам, які користуються нашим сервісом. Для цього ми керуємось такими принципами як чесність, прозорість та довіра. Наша основна цінність – надійність!
            </p>
            <p class="aboutustext4">Які можливості ми можемо вам надати?</p>

            <p class="aboutustext5">
                1. Наші клієнти – наше керівництво, ми працюємо лише для них. Ви відчуєте максимальний комфорт під час користування послугами нашої компанії.
            <br>2. Ми надаємо авто виключно з повним баком. Авто завжди надається клієнту чистим. Наші співробітники стараються надати машину максимально швидко.
            <br>3. Увесь автопарк застрахований КАСКО та ОСАГО.
            <br>4. У нас ви не зустрінете жодних прихованих платежів. Ми працюємо прозоро, інакше нам би не вдалося вийти в лідери на ринку прокату автомобілів!
            <br>5. Якщо авто вийде з ладу, ми миттєво замінимо його. Саме тому багато хто вже оцінив якість нашого обслуговування.
        </p>

        <p class="aboutustext6">Ми вдячні всім за підтримку та високу оцінку!</p>

    </div>







</main>

<footer class="footer">
    <a href="https://www.facebook.com/"><img src="../main/image/facebook-logo-50 (1).png" class="footerfacebookicon"></a>
    <a href="https://www.instagram.com/"><img src="../main/image/instagram-logo-50 (1).png" class="footerinstagramicon"></a>
    <a href="https://twitter.com"><img src="../main/image/twitter-logo-50 (1).png" class="footertwittericon"></a>
</footer>




</body>
</html>