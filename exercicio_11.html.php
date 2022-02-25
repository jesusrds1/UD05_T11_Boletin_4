<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>
<body>
<?php
        $n = $_POST['n'];
        
        if (!isset($n)) {
?>
        <h2> Introduce un numero: </h2>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <input type="number" name="n">
            <input type="submit" value="Aceptar">
        </form>
    <?php

        } else {
          echo "<table border=1><tr><td>n</td><td>n<sup>2</sup></td><td>n<sup>3</sup></td></tr>";
          for ($i = $n; $i < $n + 5; $i++) {
            echo "<tr><td>$i</td><td>".pow($i,2)."</td><td>".pow($i,3)."</td></tr>";
          }
          echo "</table>";
        }

    ?>
</body>
</html>