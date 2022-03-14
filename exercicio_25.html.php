<?php
        $n = $_POST['n'];
        
        if (!isset($n)){
        ?>
        Por favor, introduzca un número entero:
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
          <input type="number" name="n" min="0" autofocus required><br>
          <input type="submit" value="Aceptar">
        </form>
        <?php
        } else {
          $volteado = 0;

          $numero = $n;
          while ($numero > 0) {
            $volteado = ($volteado * 10) + ($numero % 10);
            $numero = floor($numero / 10);
          }

          echo "Si le damos la vuelta al numero $n resulta : $volteado";
        }
        ?>