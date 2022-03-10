<?php
          $n = $_POST['n'];
          $suma = $_POST['suma']; 
          $numeroDeElementos = $_POST['numeroDeElementos'];

          // Inicializa variables
          if (!isset($n)) {
            $suma = 0;
            $numeroDeElementos = -1;
          }

          if ($suma < 10000) {
            $suma += $n;
            $numeroDeElementos++;
          }
        
          if ((!isset($n)) || ($suma < 10000)) {
          ?>
            Introduzca numeros mientras la suma de ellos sea inferior a 10000<br>
            <<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">>
              <input type="number" name="n" autofocus=""><br>
              <input type="text" name="numeroDeElementos" value="<?php echo $numeroDeElementos; ?>">
              <input type="text" name="suma" value="<?php echo $suma; ?>">
              <input type="submit" value="Aceptar">
            </form>
          <?php
          }
        
          if ($suma >= 10000) {
            echo "Ha introducido un total de $numeroDeElementos números.<br>";
            echo "La suma total es $suma<br>";
            echo "La media es ".($suma/$numeroDeElementos);
          }
          ?>