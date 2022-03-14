<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <h3>Ejercicio 3</h3>
        <p>Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle do-while</p>
        <?php
            $i=0;
            do {
                $res= $i * 5;
                echo "<p>5 * $i = $res</p>";
                $i= $i + 1;
            } while ($i <= 20);
        ?>
    </body>
</html>
</body>
</html>