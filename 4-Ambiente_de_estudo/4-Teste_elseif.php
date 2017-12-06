<!DOCTYPE html>
<html lang="pt-br">

    <head>
         <meta chatset="UTF-8">
         <title>Testando elseif</title>
    </head>

    <body>
    
<?php
    /*
        0 até 14 = pequeno
        15 até 19 = medio
        20 ou mais = grande
    */
if(isset($_POST["tamanho"])){
    $tamanho = $_POST["tamanho"];

    if($tamanho < 15){
        echo "|O tamanho é pequeno|";
    }elseif($tamanho >= 15 and $tamanho < 20){
        echo "|O tamanho é médio|";
    }else{
        echo "|O tamaho é grande|";
    }
}
?>

<form method="POST">
    <input type="text" name="tamanho">
    <input type="submit">

    </body>
</html>