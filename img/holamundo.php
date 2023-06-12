<?php

$numero = 5;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($numero == 3) {
            echo "<p>El numero es igual a 3</p>";
        } else {
            echo "<p>El numero no es igual a 3</p>";
        }
    ?>
</body>
</html>