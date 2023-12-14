<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Jost" rel="stylesheet">
    <link rel="stylesheet" href="../Cars.css">
    <title>Kia Sportage</title>
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
        <header class="header">
            <div class="cap">
                <img src="../image/Beru__3_-removebg-preview 1.png" class="icon">
                <a href="../../Main/Main.php"><img src="../image/home-solid-240 1.png" class="home_icon"></a> 
        

                <?php
                    if (isset($_SESSION['user'])) {
                        $_SESSION['user']=$username;
                ?>    
                    <div style="position: absolute; width: 300px; left: 930px; top: 37px; text-decoration: none; font-family: 'Jost'; font-style: normal; font-weight: 400; font-size: 24px; line-height: 35px; text-align: right; color: black;"><?= $_SESSION['user'];?></div>
                <?php
                    echo '<a href="../../user/form/logout.php"<div class="signinbutton">
                    <p class="signout">Вийти</p>
                    </div></a>';
 
                    }
                    else {
                    echo '<a href="../../user/form/registration.php"><div class="signupbutton">
                    <p class="signup">Реєстрація</p>
                    </div></a>';
                    echo '<a href="../../user/form/login.php"<div class="signinbutton">
                    <p class="signin">Авторизація</p>
                    </div></a>';
                    }
                ?>

            </div>
        </header>
    

        <main class="container">
            <div class="cc">
                <div class="carfoto">
                    <p class="carname">Прокат Kia Sportage</p>

                    <!--image slider start-->
                    <div class="slider">
                        <div class="slides">
                            <!--radio buttons start-->
                            <input type="radio" name="radio-btn" id="radio1">
                            <input type="radio" name="radio-btn" id="radio2">
                            <input type="radio" name="radio-btn" id="radio3">
                            <input type="radio" name="radio-btn" id="radio4">
                            <!--radio buttons end-->
                            <!--slide images start-->
                            <div class="slide first">
                                <img src="image/DSC_0643-825x510 (1).jpg" alt="">
                                </div>
                            <div class="slide">
                                <img src="image/DSC_0649 (2).jpg" alt="">
                            </div>
                            <div class="slide">
                                <img src="image/DSC_0651 (1).jpg" alt="">
                            </div>
                            <div class="slide">
                                <img src="image/DSC_0670 (1).jpg" alt="">
                            </div>
                            <!--slide images end-->
                            <!--automatic navigation start-->
                            <div class="navigation-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                                <div class="auto-btn4"></div>
                            </div>
                            <!--automatic navigation end-->
                        </div>
                            <!--manual navigation start-->
                            <div class="navigation-manual">
                                <label for="radio1" class="manual-btn"></label>
                                <label for="radio2" class="manual-btn"></label>
                                <label for="radio3" class="manual-btn"></label>
                                <label for="radio4" class="manual-btn"></label>
                            </div>
                    <!--manual navigation end-->
                    </div>
                    <!--image slider end-->

                    <script type="text/javascript">
                        var counter = 1;
                        setInterval(function(){
                            document.getElementById('radio' + counter).checked = true;
                            counter++;
                            if(counter > 4){
                                counter = 1;
                            }
                        }, 5000);
                    </script>

                    <div class="right_block">
                        <div class="location">
                        <p class="location_name">Чернівці</p>
                        <img src="../image/Vector.png" class="location_icon">
                        </div>

                        <div class="address_maket">
                            <div class="address_maket_blue">
                            <p class="address_maket_blue_text">Адреса видачі</p>
                            </div>
                            <div class="address_one">
                                <div class="address_ellipse"></div>
                                <p class="address_text">Центральний залізничний вокзал (вул. Гагаріна, 38)</p>
                            </div>

                            <div class="address_two">
                                <div class="address_ellipse"></div>
                                <p class="address_text">Автовокзал (вул. Головна, 219)</p>
                            </div>

                            <div class="address_three">
                                <div class="address_ellipse"></div>
                                <p class="address_text">Аеропорт (вул. Чкалова, 30)</p>
                            </div>

                            <div class="address_four">
                                <div class="address_ellipse"></div>
                                <p class="address_text">Доставка / повернення за вашою адресою в Чернівцях</p>
                            </div>
                        
                        
                            <p class="right_block_text1"><span class="colortext">*</span> Ознайомитися з умовами оренди авто на добу</p>
                            <p class="right_block_text2"><span class="colortext">*</span> Додаткове страхування доступне при оренді від 3-х діб</p>
                        
                            <a href="../rental-form/rental-form.php"><div class="right_block_button">
                            <p class="right_block_button_text">Замовити</p>
                            </div></a>

                        </div>


        
                    </div>

                </div>

                <div class="characteristics_block">
                    <div class="characteristics_block_rectangle">
                        <p class="characteristics_block_rectangle_text">Характеристики</p>
                    </div>

                    <element class="characteristics_block_line"></element>


                    <div class="characteristics_block_one">
                        <p class="characteristics_block_question">Бренд</p>
                        <p class="characteristics_block_answer">Kia</p>
                    </div>

                    <div class="characteristics_block_two">
                        <p class="characteristics_block_question">Тип кузова</p>
                        <p class="characteristics_block_answer">Позашляховик</p>
                    </div>

                    <div class="characteristics_block_three">
                        <p class="characteristics_block_question">Об’єм двигуна</p>
                        <p class="characteristics_block_answer">1.6 л</p>
                    </div>

                    <div class="characteristics_block_four">
                        <p class="characteristics_block_question">Тип КПП</p>
                        <p class="characteristics_block_answer">Авто</p>
                    </div>

                    <div class="characteristics_block_five">
                        <p class="characteristics_block_question">Вид топлива</p>
                        <p class="characteristics_block_answer">Бензин</p>
                    </div>

                    <div class="characteristics_block_six">
                        <p class="characteristics_block_question">Кількість пасажирів</p>
                        <p class="characteristics_block_answer">5 чол.</p>
                    </div>

                    <div class="characteristics_text_block">

                        <div class="characteristics_text_block1">
                            <p class="characteristics_text_block1_1">Середня витрата палива: 7.8 л / 100км</p>
                            <p class="characteristics_text_block1_2">Вартість шляху в 100 км: 396 грн *</p>
                            <p class="characteristics_text_block1_3"><span class="colortext">*</span> Розраховано на основі середн. вартості A95 на заправках в Чернівцях станом на 06.05.23</p>
                        </div>

                        <div class="characteristics_text_block2">
                        <p class="characteristics_text_block2_1">Нова версія KIA Sportage створена для активних водіїв, які живуть подорожами і пошуком нових вражень. Цей стильний і просторий автомобіль здивує вас не тільки дизайном, але й розширеним набором функцій управління та безпеки: до них відносяться, наприклад, системи допомоги водієві при підйомі і спуску по схилу. У своєму класі Спортейдж був визнаний одним із найнадійніших авто.</p>
                        </div>

                        <div class="characteristics_text_block3">
                        <p class="characteristics_text_block3_1">Двигун – 1.6 л (132 к.с.)<br>Витрата палива – 8.0 л / 100 км.<br>Обсяг паливного бака – 62 л.<br>Привід автомобіля – передній.<br>Обсяг багажника – 466 л.</p>

                        </div>
                    
                    </div>
                </div>

                <div class="configuration_block">

                    <div class="configuration_block_rectangle">
                        <p class="configuration_block_rectangle_text">Комплектація</p>
                    </div>

                    <div class="configuration_one">
                        <div class="configuration_ellipse"></div>
                        <p class="configuration_text">Гідропідсилювач керма</p>
                    </div>

                    <div class="configuration_two">
                        <div class="configuration_ellipse"></div>
                        <p class="configuration_text">Мультимедіа</p>
                    </div>

                    <div class="configuration_three">
                        <div class="configuration_ellipse"></div>
                        <p class="configuration_text">Клімат контроль</p>
                    </div>

                    <div class="configuration_four">
                        <div class="configuration_ellipse"></div>
                        <p class="configuration_text">Мультикермо</p>
                    </div>

                </div>

            </div>
        </main>

        
        
        <footer class="footer">
            <a href="https://www.facebook.com/"><img src="../image/facebook-logo-50 (1).png" class="footerfacebookicon"></a>
            <a href="https://www.instagram.com/"><img src="../image/instagram-logo-50 (1).png" class="footerinstagramicon"></a>
            <a href="https://twitter.com"><img src="../image/twitter-logo-50 (1).png" class="footertwittericon"></a>
        </footer>

    </div> 
    



</body>
</html>