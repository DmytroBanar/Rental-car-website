<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Jost" rel="stylesheet">
    <link rel="stylesheet" href="registration.css">
    
    <title>Реєстрація</title>
</head>
<body>

    <div class="wrapper">

        <header class="header">
            <a href="../../Main/Main.php"><img src="../image/home-solid-240 1.png" class="home_icon"></a> 
        </header>

        <main class="container">
            <div class="row">
                <div class="form_registration">
                    <img src="../image/Logo.png" class="icon">
                    <p class="registration_title">Реєстрація</p>
                        <form method="POST" action="insert.php">
                
                            <div class="username_block">
                                <p class="UaEaPaNaB_name">Ім'я користувача*</p>
                                <input type="text" name="name" id="name" placeholder="Від 3 до 16 символів" class="UaEaPaNaB_button">
                            </div>
                
                            <div class="email_block">
                                <p class="UaEaPaNaB_name">Email*:</p>
                                <input type="email" name="email" placeholder="example@gmail.com" class="UaEaPaNaB_button">
                            </div>
                
                            <div class="number_block">
                                <p class="UaEaPaNaB_name">Телефонний номер:</p>
                                <input type="text" name="number" placeholder="0********* (10 цифр)" class="UaEaPaNaB_button">
                            </div>
                
                            <div class="password_block">
                                <p class="UaEaPaNaB_name">Пароль:</p>
                                <input type="password" name="password" placeholder="від 6 до 16 символів " class="UaEaPaNaB_button">
                            </div>
                
                            <div class="registration_block">
                                <button class="registration_button">Реєстрація</button>
                            </div>
                
                            <div class="login_block">
                                <p class="login_text1">Зареєстровані?</p>
                                <a href="login.php" class="login_text2">Авторизуйтесь</button></a>
                            </div>
                        </form>
                </div>
            </div>
        </main>


        <footer class="footer">
            <a href="https://www.facebook.com/"><img src="../image/facebook-logo-50 (1).png" class="footerfacebookicon"></a>
            <a href="https://www.instagram.com/"><img src="../image/instagram-logo-50 (1).png" class="footerinstagramicon"></a>
            <a href="https://twitter.com"><img src="../image/twitter-logo-50 (1).png" class="footertwittericon"></a>
        </footer>


    </div>

    
    <?php



    ?>


</body>
</html>