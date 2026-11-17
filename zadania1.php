<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data = date('w');
        if ($data == 0) {
            $data = "niedziela";
        } else if ($data == 1) {
            $data = "poniedzialek";
        }else if ($data == 2) {
            $data = "wtorek";
        }else if ($data == 3) {
            $data = "sroda";
        }else if ($data == 4) {
            $data = "czwartek";
        }else if ($data == 5) {
            $data = "piatek";
        }else if ($data == 6) {
            $data = "sobota";
        }
        echo "$data";
    ?>
</body>
</html>