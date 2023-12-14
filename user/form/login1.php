
<?php

$Name = $_POST['name'];
$Password = $_POST['password'];

$Con = mysqli_connect('localhost','root','','ecommerce');
$result = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE (BINARY UserName = '$Name' OR BINARY Email = '$Name') AND BINARY Password = '$Password' ");


session_start();

if(mysqli_num_rows($result)){

    $_SESSION['user'] = $Name;

    echo"
    <script>
    alert('Успішна авторизація');
    window.location.href= '../../Main/Main.php'
    </script>
    ";
}

else {
    echo"
    <script>
    alert('Неправильно введені дані. Перевірьте дані та повторіть спробу');
    window.location.href= 'login.php'
    </script>
    "; 
}

?>