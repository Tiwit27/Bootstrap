<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <a href="add.html"><button class='btn btn-primary'>Dodaj</button></a>
    <table class="table text-center">
        <tr>
            <th>x</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Adres</th>
            <th>Miasto</th>
            <th>Operacje</td>
        </tr>
        <?php
            $conn = mysqli_connect('localhost','root','', 'bootstrap');
            $zap = mysqli_query($conn,"SELECT imie, nazwisko, adres, miasto FROM pracownicy;");
            $x = 1;
            while($row = mysqli_fetch_array($zap))
            {
                echo "<tr><td>$x</td><td>$row[imie]</td><td>$row[nazwisko]</td><td>$row[adres]</td><td>$row[miasto]</td><td><a href='edit.html'><button class='btn btn-primary'>Edytuj</button></a><button class='btn btn-danger'>Usuń</button></td></tr>";
                $x++;
            }
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>