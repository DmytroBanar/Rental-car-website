
<?php

$Con = mysqli_connect('localhost','root','','ecommerce');

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Password = $_POST['password'];
    
    
    
    if (!preg_match('/^[A-Za-z][A-Za-z_]{2,15}$/', $Name)) {
        echo "
        <script>
        alert('Неправильний формат імя користувача (від 3 до 16 символів та може складатись лиш з букв великого & малого реєстру та `_`. Перший символ має бути буквою)');
        window.location.href= 'registration.php';
        </script>
        ";
    }
        
    elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "
        <script>
        alert('Неправильний формат електронної пошти (example@gmail.com)');
        window.location.href= 'registration.php';
        </script>
        ";
    } 
    elseif (strlen($Number) !== 10 || !is_numeric($Number)) {
        echo "
        <script>
        alert('Неправильний формат номера телефону (має містити 10 цифр)');
        window.location.href= 'registration.php';
        </script>
        ";
    }

    elseif (strlen($Password) < 6 || strlen($Password) > 16) {
        echo "
        <script>
        alert('Пароль повинен містити від 6 до 16 символів');
        window.location.href= 'registration.php';
        </script>
    ";
    } 
    elseif (!empty($Password) && !preg_match('/^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9.-_]+$/', $Password)) {       
        echo "
        <script>
        alert('Пароль повинен містити щонайменше 1 цифру, 1 малу літеру, 1 велику літеру. Може містити крапку (.), нижнє підчеркнення (_) та дефіс (-)');
        window.location.href= 'registration.php';
        </script>
        ";
    }
    else {
        $Dup_Email = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE Email = '$Email' ");
        $Dup_UserName = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE UserName = '$Name' ");
        $Dup_Number = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE Number = '$Number' ");

    
    
if(mysqli_num_rows( $Dup_Email)) {
    echo"
    <script>
    alert('Електронна адреса вже зайнята');
    window.location.href= 'registration.php'
    </script>
    ";

}

if(mysqli_num_rows( $Dup_UserName)) {
    echo"
    <script>
    alert('Імя користувача вже зайнято');
    window.location.href= 'registration.php'
    </script>
    ";

}

if(mysqli_num_rows( $Dup_Number)) {
    echo"
    <script>
    alert('Номер вже зайнятий');
    window.location.href= 'registration.php'
    </script>
    ";

}

else {
    mysqli_query($Con, " INSERT INTO `tbluser`(`UserName`, `Email`, `Number`, `Password`) 
    VALUES ('$Name','$Email','$Number','$Password') ");

echo"
<script>
alert('Успішна реєстрація');
window.location.href= 'login.php'
</script>
";
}

}

}

?>