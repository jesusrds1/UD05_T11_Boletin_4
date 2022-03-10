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
          $n = $_POST['n'];
        
          if (!isset($n)) {
          ?>
           <h3> Introduzca un número para saber si es primo o no.<br> </h3>
           <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
              <input type="number" name="n" min="0" autofocus><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $esPrimo = true;
            for ($i = 2; $i < $n; $i++) {
              if ($n % $i == 0) {
                $esPrimo = false;
              }
            }
          
            if (($n == 0) || ($n == 1)) {
              $esPrimo = false;
            }
            
            if ($esPrimo) {
                echo "El $n es primo.";
            } else {
                echo "El $n no es primo.";
            }
          }
        ?>
</body>
</html>