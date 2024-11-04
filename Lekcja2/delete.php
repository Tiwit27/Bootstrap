<?php
$conn = mysqli_connect('localhost','root','', 'bootstrap');
$id = $_SESSION['id'];
$zap = mysqli_query($conn,"DELETE FROM pracownicy WHERE pracownicy.id = id");
mysqli_close($conn);
?>