<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>INTRODUCE EL NUMERO A COMPROBAR LA LONGITUD</h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="number" name="num">
    <br>
    <input type="submit" value="Aceptar">
</form>
    <?php

    $longitud = count(str_split($_POST["num"]));

echo "La longitud es de $longitud";
    ?>
</body>
</html>