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
          $n1 = $_POST['n1'];
          $n2 = $_POST['n2'];
        
          if ((!isset($n1)) || ($n1 == $n2)){
          ?>
            Introduce dos números enteros distintos.<br>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
              <input type="number" name="n1" autofocus=""><br>
              <input type="number" name="n2"><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            if ($n1 > $n2) {
                $aux = $n1;
                $n1 = $n2;
                $n2 = $aux;
            }
      
            for ($i = $n1; $i <= $n2; $i+=7) {
              echo "$i  ";
            }
          }
        ?>
</body>
</html>