<?php
    $car = $_POST['car'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $datein = $_POST['datein'];
    $dateout = $_POST['dateout'];
    $text = $_POST['text'];

	$to = "banar.dima04@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Прокат авто ($car)";

	
	$msg="
    Машина: $car
    Ім'я: $name
    Фамілія: $surname
    Телефон: $phone
    Почта: $email
    Від: $datein
    До: $dateout
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p class="after_text">Форма була відправлена<br>Очікуйте дзвінка оператора</p>

<style>
.after_text {
    text-align: center;
}
</style>
