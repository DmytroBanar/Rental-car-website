<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Прокат (заповнення форми)</title>
    <link href="https://fonts.googleapis.com/css?family=Jost" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/jquery.maskedinput.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="rental-form.css">

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
else {

}


?>

<div class="wrapper">
        <header class="header">
            <img src="../image/Beru__3_-removebg-preview 1.png" class="icon">
            <a href="../../Main/Main.php"><img src="../image/home-solid-240 1.png" class="home_icon"></a> 
        

            <?php
                if (isset($_SESSION['user'])) {
                    $_SESSION['user']=$username;
            ?>    
                    <div style="position: absolute; width: 300px; left: 930px; top: 37px; text-decoration: none; font-family: 'Jost'; font-style: normal; font-weight: 400; font-size: 24px; line-height: 35px; text-align: right; color: black;"><?= $_SESSION['user'];?></div>
            <?php
                     echo '<div class="signinbutton">
                    <a href="../../user/form/logout.php" class="signout">Вийти</a>
                    </div>';
 
                }
                else {
                    echo '<div class="signupbutton">
                    <a href="../../user/form/registration.php" class="signup">Реєстрація</a>
                    </div>';
                    echo '<div class="signinbutton">
                    <a href="../../user/form/login.php" class="signin">Авторизація</a>
                    </div>';

                }
            ?>


        </header>
    

        <main class="container">


    <form action="sender.php" method="post">
        <select name="car" id="format" required>
            <option selected disabled>Виберіть потрібний ТЗ</option>
            <option value="Renault Logan">1. Renault Logan</option>
            <option value="Ford Focus">2. Ford Focus</option>
            <option value="Toyota Camry XSE">3. Toyota Camry XSE</option>
            <option value="Kia Sportage">4. Kia Sportage</option>
            <option value="Skoda Fabia">5. Skoda Fabia</option>
            <option value="Audi A5 TFSI Quattro">6. Audi A5 TFSI Quattro</option>
            <option value="Hyundai H1">7. Hyundai H1</option>
            <option value="Peugeot 2008">8. Peugeot 2008</option>
        </select>
        <input type="text" class="name" name="name" placeholder="Ім'я" required>
        <input type="text" name="surname" placeholder="Фамілія">
        <input type="text" class="phone" name="phone" placeholder="Телефон" required>
        
        <input type="email" name="email" placeholder="Email" required>

        <div class="date">
        <input type="date" name="datein" placeholder="Від">
        <input type="date" name="dateout" placeholder="До">
        </div>

        <textarea name="text" id="" cols="30" rows="3" placeholder="Коментар для менеджера"></textarea>
        <button type="button" class="send-form">Відправити</button>
        <div class="status"></div>
    </form>

    </main>

    <footer class="footer">
            <a href="https://www.facebook.com/"><img src="../image/facebook-logo-50 (1).png" class="footerfacebookicon"></a>
            <a href="https://www.instagram.com/"><img src="../image/instagram-logo-50 (1).png" class="footerinstagramicon"></a>
            <a href="https://twitter.com"><img src="../image/twitter-logo-50 (1).png" class="footertwittericon"></a>
        </footer>
    
</div>
    
</body>

</html>