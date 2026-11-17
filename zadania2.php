<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $imie = "jan kowalski";
        $otw = fopen("text.txt", "w");
        $wpi = fwrite($otw, $imie);
        $zam = fclose($otw);
        ?>
</body>
</html>