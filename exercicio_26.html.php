<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 26</title>
    </head>
    <body>
        <h3>Ejercicio 26</h3>
        <p>Realiza un programa que pida primero un número y a continuación un dígito. El programa nos debe dar la posición (o posiciones) contando de izquierda a derecha que ocupa ese dígito en el número introducido.</p>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <p><input type="text" name="num"></p>
            <p><input type="text" name="dig"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        $num = isset($_REQUEST["num"])&&is_numeric($_REQUEST["num"])?$_REQUEST["num"]:"a";
        $dig = isset($_REQUEST["dig"])&&is_numeric($_REQUEST["dig"])?$_REQUEST["dig"]:"a";
        if ($dig < 0 || count($dig) > 1) {
            echo "Debes escribir un dígito";
        } else {
            $anum = str_split($num);
            $pos = "";
            for ($i=0; $i < count($anum); $i++) { 
                if ($anum[$i] == $dig) {
                    $pos = $pos."[".strval($i)."]";
                }
            }
            echo "<p>$dig está en la posición $pos (Empiezan en 0)</p>";
        }
        ?>
    </body>
</html>