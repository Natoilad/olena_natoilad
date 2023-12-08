<?php
    $name = $_POST['user-name'];
    $tel = $_POST['user-phone'];
    $text = $_POST['user-comment'];

	$to = "living_beer@ukr.net"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$subject = "Заявка з сайту";

	
	$msg="
    Ім'я: $name 
    Телефон: $tel 
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $to ");

?>

<p>Ваша форма відправлена</p>