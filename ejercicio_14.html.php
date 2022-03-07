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
          $exponente = $_POST['exponente'];

          if (!isset($base)) {
          ?>  
            <h1>Este programa calcula la potencia a partir de la base y el exponente.<br> </h1>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
              Base: <input type="number" name="base" autofocus><br>
              Exponente: <input type="number" name="exponente"><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $potencia = 1;

            if ($exponente == 0) {
              $potencia = 1;
            }

            if ($exponente > 0) {
              for ($i = 0; $i < $exponente; $i++) {
                $potencia *= $base;
              }
            }

            if ($exponente < 0) {
              for ($i = 0; $i < -$exponente; $i++) {
                $potencia *= $base;
              }

              $potencia = 1 / $potencia;
            }

            echo "$base<sup>$exponente</sup> = $potencia";
          }
        ?>
</body>
</html>