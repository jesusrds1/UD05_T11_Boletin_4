<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
          $base = $_POST['base'];
          $exponenteFinal = $_POST['exponenteFinal'];

          if (!isset($base)) {
          ?>
           <h2> potencias sucesivas a partir de la base y el exponente. </h2>
           <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
              Base: <input type="number" name="base" autofocus><br>
              Exponente: <input type="number" name="exponenteFinal"><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            for ($i = 1; $i <= $exponenteFinal; $i++) {
              $potencia = 1;
              $exponente = $i;

              for ($j = 0; $j < $exponente; $j++) {
                $potencia *= $base;
              }

              echo "$base<sup>$exponente</sup> = $potencia<br>";
            }
          }
          ?>
</body>
</html>