<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 23</title>
    </head>
    <body>
        <h3>Ejercicio 23</h3>
        <p>Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado, el contador de los números introducidos y la media.</p>

        <?php
        $count = 0;
        $res = 0;
        do {
            $num = rand(-5,25);
            $count++;
            $res = $res + $num;
        } while ($res <= 1000);
        $avg=$res/$count;
        echo "<p>Total: $res</p>";
        echo "<p>Números generados: $count</p>";
        echo "<p>Media: $avg</p>";
        ?>
    </body>
</html>