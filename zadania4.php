<?php
session_start();
if (isset($_SESSION["licznik"])) {
    $_SESSION["licznik"] = 1;
    echo $_SESSION["licznik"];
}else {
    $_SESSION["licznik"]++;
    echo $_SESSION["licznik"];


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <input type="submit" value="zresetuj">
</body>
</html>