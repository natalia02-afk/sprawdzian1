<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_COOKIE["ciastko"])) {
        echo "dziekujemy za zaakceptowanie regulaminu";
    } else {
        setcookie("ciastko", "1", time()+60*60*1);
        echo "zaakceptuj regulamin";
        exit;
    }
    ?>
</body>
</html>