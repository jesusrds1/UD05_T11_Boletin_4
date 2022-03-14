<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 27</title>
    </head>
    <body>
        <h3>Ejercicio 27</h3>
        <p>Escribe un programa que muestre, cuente y sume los múltiplos de 3 que hay entre 1 y un número leído por teclado.</p>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <p><input type="text" name="num"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        $num=isset($_REQUEST["num"])&&is_numeric($_REQUEST["num"])?intval($_REQUEST["num"]):"a";
        if ($num > 1) {
            for ($i=1; $i <= $num; $i++) {
                $m = $i * 3;
                if ($m > $num) {
                    break;
                } else {
                    echo "<p>$m</p>";
                }
            }
        } else {
            echo "<p>Introduce un número mayor que 1.</p>";
        }
        ?>
    </body>
</html>