<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="number" name="num" >
    <br>
    <input type="submit" value="Enviar">
    <input type="reset">

</form>
    <?php
        $num = $_POST['num'];
        $fib0 = 0;
        $fib1 = 1;
        echo "$fib0 <br>";
        echo "$fib1 <br>";
    for ($i=2; $i < $num  ; $i++) { 
        $fibActual = $fib0 + $fib1;
        echo "$fibActual <br>";
        $fib0 = $fib1;
        $fib1 = $fibActual;
    }
    echo "Fibonachi de $num = $fibActual <br>";
    ?>
</body>
</html>