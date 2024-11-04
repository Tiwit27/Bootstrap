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
    
    
    <form action="index.php" method="post">
    
    
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
            session_start();
                $conn = mysqli_connect('localhost','root','', 'bootstrap');


                if(isset($_POST['del']))
                {
                    $id = $_POST['id'];

                    $zap = mysqli_query($conn, "DELETE FROM `pracownicy` WHERE id='$id'");
                }
                if(isset($_POST['edit']))
                {
                    $id = $_POST['id'];
                    $_SESSION['id'] = $id;
                    header("Location: ./edit.php");
                }

                $zap = mysqli_query($conn,"SELECT id, imie, nazwisko, adres, miasto FROM pracownicy;");
                $x = 1;

                

                while($row = mysqli_fetch_array($zap))
                {
                    echo "<input type='hidden' value='$row[0]' name='id'>";
                    echo "<tr><td>$x</td><td>$row[imie]</td><td>$row[nazwisko]</td><td>$row[adres]</td><td>$row[miasto]</td><td><button onclick='edit.php' class='btn btn-primary' name='edit'>Edytuj</button><input class='btn btn-danger' type='submit' value='Usuń' name='del'></td></tr>";
                    $x++;
                }
                
                mysqli_close($conn);
            ?>
        </table>
    </form>
</body>
</html>