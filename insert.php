<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')")){
	echo "<p>Вы успешно зарегистрировались! Через 5 секунд будет произведено перенаправление на страницу авторизации</p>";
    echo "<script> window.setTimeout(function() { window.location = 'login.php'; }, 5000) </script>";

	
}



?>
