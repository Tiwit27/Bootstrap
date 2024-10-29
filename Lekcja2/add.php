<?php
$conn = mysqli_connect('localhost','root','', 'bootstrap');
$name = $_POST["name"];
$surname = $_POST["surname"];
$adress = $_POST["adress"];
$city = $_POST["city"];
$zap = mysqli_query($conn,"INSERT INTO pracownicy(imie, nazwisko, adres, miasto) VALUES ('$name','$surname','$adress','$city');");
mysqli_close($conn);
?>