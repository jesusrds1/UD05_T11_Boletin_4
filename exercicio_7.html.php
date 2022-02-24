<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combi Completa</title>
</head>
<body>
<?php
$combinacionSecreta = "1111";

if((isset($_REQUEST['intentos']) && intval($_REQUEST['intentos'])<4) || !isset($_REQUEST['intentos'])){
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="hidden" name="intentos" value="<?php
    if(!isset($_REQUEST['intentos'])){
        echo "0";
    }else{
        echo intval($_REQUEST['intentos'])+1;
    }
    ?>">
    <label for="combinacion">Introduce un numero para la combinacion de la caja fuerte:</label>
    <input type="number" name="combinacion">
    <br>
    <input type="submit" value="Enviar">
</form>
<?php

    if(isset($_REQUEST['combinacion'])
    && filter_var ($_REQUEST['combinacion'],
    FILTER_VALIDATE_REGEXP, array("options" => array ("regexp" => "/[0-9]{4}/")))){
    
        if($_REQUEST['combinacion'] == $combinacionSecreta ){
            echo "<p>La caja fuerte se ha abierto satisfactoriamnete </p>";
        }else{
            echo "<p> Lo siento, esta no es la combinacion </p>";
    
        }
    }else{
            echo "<p>Introduce un numero de catro dixitos</p>";
        }
}else if(isset($_REQUEST['intentos'])){
    echo "Superaches o num de intentos";
}

    ?>

</body>
</html>