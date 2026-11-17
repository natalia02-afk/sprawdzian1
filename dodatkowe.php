<?php
$poloczenie = mysqli_connect("localhost", "root", "", "sklep");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // if (isset($_POST['nazwa'])) {
        //     $nazwa = $_POST['nazwa'];
            $zapytanie = "SELECT imie, nazwisko FROM `klienci`";
            $wynik = mysqli_query($poloczenie, $zapytanie);
            echo"<table>";
            echo "<th>imie</th>";
            echo "<th>nazwisko</th>";
            while ($wiersz = mysqli_fetch_array($wynik)) {
                echo "<tr>";
                echo"<td>$wiersz[0]</td>";
                echo"<td>$wiersz[1]</td>";
                echo "</tr>";
            }
            echo"</table>";
        // }
    ?>
</body>
</html>
<?php
$zamknij = mysqli_close($poloczenie);
?>