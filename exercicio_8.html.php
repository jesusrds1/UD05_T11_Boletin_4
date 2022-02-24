<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Introduzca un número del 0 al 10:</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="number" name="n" min="0" max="10"><br>
    <input type="submit" value="Aceptar">
</form>
<table border="1">
          <?php
            $n = $_POST['n'];
            
            echo "Tabla del $n<br><br>";
            for ($i = 0; $i < 11; $i++) {
              echo "<tr><td>$n x $i = ".$n*$i."</tr></td>";
            }
          ?>
        </table>


</body>
</html>