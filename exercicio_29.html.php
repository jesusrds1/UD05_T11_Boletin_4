<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 29</title>
    </head>
    <body>
        <h3>Ejercicio 29</h3>
        <p>Escribe un programa que muestre por pantalla todos los números enteros positivos menores a uno leído por teclado que no sean divisibles entre otro también leído de igual forma.</p>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <p><input type="text" name="num"></p>
            <p><input type="text" name="num2"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        $num = isset($_REQUEST["num"])&&is_numeric($_REQUEST["num"])?intval($_REQUEST["num"]):"a";
        $num2 = isset($_REQUEST["num2"])&&is_numeric($_REQUEST["num2"])?intval($_REQUEST["num2"]):"a";
        if ((!is_int($num) || $num < 0) || (!is_int($num2) || $num2 < 0)) {
            echo "<p>Introduce dos números enteros positivos.</p>";
        } else {
            for ($i=1; $i < $num; $i++) { 
                if ($i % $num2 != 0) {
                    echo "<p>$i</p>";
                }
            }
        }
        ?>
    </body>
</html>