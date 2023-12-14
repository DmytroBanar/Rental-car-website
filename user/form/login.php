<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Jost" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    

    <title>Авторизація</title>
</head>
<body>

    <div class="wrapper">
        <header class="header">
            <a href="../../Main/Main.php"><img src="../image/home-solid-240 1.png" class="home_icon"></a> 
        </header>
    

        <main class="container">
            <div class="row">

                <div class="form_login">
                    <img src="../image/Logo.png" class="icon">
                    <p class="login_title">Авторизація</p>
                <form action="login1.php" method="POST">

                    <div class="username_and_email_block">
                        <p class="UaEaPB_name">Ім'я користувача/email:</p>
                        <input type="text" name="name" required oninvalid="this.setCustomValidity('Заповніть це поле')" placeholder="Введіть ім'я користувача або email" class="UaEaPB_button">
                    </div>

                    <div class="password_block">
                        <p class="UaEaPB_name">Пароль:</p>
                        <input type="password" name="password" required oninvalid="this.setCustomValidity('Заповніть це поле')" placeholder="Введіть пароль" class="UaEaPB_button">
                    </div>

                    <div class="login_block">
                        <button class="login_button">Авторизація</button>
                    </div>

                    <div class="registration_block">
                        <p class="registration_text1">Ще не зареєстровані?</p>
                        <a href="registration.php" class="registration_text2">Зареєструйтесь</button></a>
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



