<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 21</title>
    </head>
    <body>
        <h3>Ejercicio 21</h3>
        <p>Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye en el cómputo.</p>

        <?php
            if (isset($_REQUEST["reiniciar"])) {
                $count=0;
                $res=0;
                $par=0;
                $impares=0;
                $max_par=0;
            }

            $res=$_REQUEST["res"];
            $count=$_REQUEST["count"];
            $par=$_REQUEST["par"];
            $impares=$_REQUEST["impares"];
            $max_par=$_REQUEST["max_par"];

            if (isset($_REQUEST["num"]) && is_numeric($_REQUEST["num"]) && $_REQUEST["num"] >= 0) {
                $count=intval(isset($_REQUEST["count"])?$_REQUEST["count"]+1:0);
                if ($_REQUEST["num"] % 2 == 0) {
                    $par = $_REQUEST["num"];
                    if (($par % 2 == 0) && ($par > $max_par)) {
                        $max_par = intval(isset($_REQUEST["max_par"])?$par:0);
                    }
                } else {
                    $impares=intval(isset($_REQUEST["impares"])?$_REQUEST["impares"]+1:0);
                    $res=intval(isset($_REQUEST["res"])?$_REQUEST["res"]+intval(isset($_REQUEST["num"])?$_REQUEST["num"]:0):0);
                }
            }

            if (isset($_REQUEST["num"]) && $_REQUEST["num"] < 0) {
        ?>
            <form action="ejercicio_21.php" method="post">
                <input type="submit" value="Reiniciar">
            </form>

        <?php
                $media_im=$res/$impares;
                echo "<p>Números introducidos: $count</p>";
                echo "<p>A media dos impares é de $media_im</p>";
                echo "<p>O mayor dos pares é $max_par</p>";
            } else {
        ?>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <p><input type="text" name="num"></p>
                    <p><input type="hidden" name="res" value="<?php echo $res?>"></p>
                    <p><input type="hidden" name="count" value="<?php echo $count?>"></p>
                    <p><input type="hidden" name="pares" value="<?php echo $pares?>"></p>
                    <p><input type="hidden" name="impares" value="<?php echo $impares?>"></p>
                    <p><input type="hidden" name="max_par" value="<?php echo $max_par?>"></p>
                    <p><input type="submit" value="Enviar"></p>
                </form>
        <?php
                echo "<p>Suma: $res</p>";
                echo "<p>Números introducidos: $count</p>";
                echo "<p>Tipo: ".gettype(intval($_REQUEST["num"]))." ".$_REQUEST["num"]."</p>";
                echo "<p>Números pares: ".$pares."</p>";
                echo "<p>Números impares: ".$impares."</p>";
                echo "<p>Par máximo: ".$max_par."</p>";
            }
        ?>
    </body>
</html>