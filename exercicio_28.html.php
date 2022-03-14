<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 28</title>
    </head>
    <body>
        <h3>Ejercicio 28</h3>
        <p>Escribe un programa que calcule el factorial de un número entero leído por teclado.</p>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <p><input type="text" name="num"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        $num = isset($_REQUEST["num"])&&is_numeric($_REQUEST["num"])?intval($_REQUEST["num"]):"a";
        if (!is_int($num)) {
            echo "<p>Introduce un entero.</p>";
        } else {
            $res = 1;
            for ($i=1; $i <= $num; $i++) { 
                $res *= $i;
            }
            echo "<p>El factorial de $num! es $res</p>";
        }
        ?>
    </body>
</html>