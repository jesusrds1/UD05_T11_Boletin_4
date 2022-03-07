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
        
        if ((!isset($n)) || ($n < 0)){
        ?>
         introduce un número entero positivo.<br>
         <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <input type="number" name="n" min="0" autofocus=""><br>
            <input type="submit" value="Aceptar">
          </form>
        <?php
        } else {
          $suma = 0;
      
          for ($i = $n + 1; $i < $n + 101; $i++) {
            $suma += $i;
          }
          
          echo "La suma de los 100 números enteros siguientes : $n --> $suma";
        }
        ?>
</body>
</html>