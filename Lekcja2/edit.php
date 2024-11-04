<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div id="main" class="w-25">
        <form action="add.php" method="post">
            <h3>Edytowanie danego użytkownika</h3>
            <div class="form-group">
                <label for="name">Imie</label>
                <input required class="form-control" type="text" name="name" value="<?php
                session_start();
                $id = $_SESSION['id'];
                $conn = mysqli_connect('localhost','root','', 'bootstrap');
                $result = mysqli_query($conn,"SELECT imie FROM pracownicy WHERE id='$id';");
                while($row = mysqli_fetch_array($result))
                {
                    echo "$row[imie]";
                }
                session_destroy();
                ?>"><br>
            </div>
            <div class="form-group">
                <label for="surname">Nazwisko</label>
                <input required class="form-control" type="text" name="surname" value="<?php
                session_start();
                $id = $_SESSION['id'];
                $conn = mysqli_connect('localhost','root','', 'bootstrap');
                $result = mysqli_query($conn,"SELECT imie FROM pracownicy WHERE id='$id';");
                while($row = mysqli_fetch_array($result))
                {
                    echo "$row[nazwisko]";
                }
                session_destroy();
                ?>"><br>
            </div>
            <div class="form-group">
                <label for="adress">Adres</label>
                <input required class="form-control" type="text" name="adress" value="<?php
                session_start();
                $id = $_SESSION['id'];
                $conn = mysqli_connect('localhost','root','', 'bootstrap');
                $result = mysqli_query($conn,"SELECT imie FROM pracownicy WHERE id='$id';");
                while($row = mysqli_fetch_array($result))
                {
                    echo "$row[adres]";
                }
                session_destroy();
                ?>"><br>
            </div>
            <div class="form-group">
                <label for="city">Miasto</label>
                <input required class="form-control" type="text" name="city" value="<?php
                session_start();
                $id = $_SESSION['id'];
                $conn = mysqli_connect('localhost','root','', 'bootstrap');
                $result = mysqli_query($conn,"SELECT imie FROM pracownicy WHERE id='$id';");
                while($row = mysqli_fetch_array($result))
                {
                    echo "$row[miasto]";
                }
                session_destroy();
                ?>"><br>
            </div>
            <input type="submit" class="btn btn-primary" value="Utwórz">
        </form>
    </div>
</body>
</html>