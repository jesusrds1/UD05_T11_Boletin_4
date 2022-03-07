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
        $cuentaNumeros = $_POST['cuentaNumeros'];
        $sumaImpares = $_POST['sumaImpares']; 
        $cuentaImpares = $_POST['cuentaImpares'];
        $mayorPar = $_POST['mayorPar'];
        
        // Se inicializan los valores en la primera carga de página
        if (!isset($n)) {
          $cuentaNumeros = 0;
          $sumaImpares = 0; 
          $cuentaImpares = 0;
          $mayorPar = (PHP_INT_MIN);
        }
    
        if ($n > 0) {
          $cuentaNumeros++;
          if ($n % 2 == 0) {
            if ($n > $mayorPar) {
              $mayorPar = $n;
            } else {
              $cuentaImpares++;
              $sumaImpares += $n;
            }
          }
        }

        // Muestra el formulario en la primera carga de página y mientras se introduzcan números positivos
        if ((!isset($n)) || ($n > 0)) {
        ?>
          Introduzca un número. Si quiere terminar, introduzca un número negativo.<br>
          <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <input type="number" name="n" autofocus=""><br>
            <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
            <input type="hidden" name="sumaImpares" value="<?php echo $sumaImpares; ?>">
            <input type="hidden" name="cuentaImpares" value="<?php echo $cuentaImpares; ?>">
            <input type="hidden" name="mayorPar" value="<?php echo $mayorPar; ?>">
            <input type="submit" value="Aceptar">
          </form>
        <?php
        }
        
        // Muestra el resultado
        if ($n < 0) {
          echo "Se han introducido $cuentaNumeros números <br>";
          echo "La media de los impares es ".($sumaImpares / $cuentaImpares)."<br>";
          echo "El mayor de los pares es $mayorPar<br>";
        }
      ?>
</body>
</html>