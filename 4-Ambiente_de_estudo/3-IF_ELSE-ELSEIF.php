<!DOCTYPE html>
<html lang="pt-br">

    <head>
         <meta chatset="UTF-8">
         <title>Estrutura elseif</title>
    </head>

    <body>

<?php
if(isset($_POST["idade"])){
    $idade = $_POST["idade"];

    if($idade < 18){
        echo "<b>A idade é de uma criança ou de um adolescente</b>";
    }elseif($idade >= 18 and $idade < 60){
        echo "<b>A idade é de uma pessoa adulta</b>";
    }else{
        echo "<b>A idade é de uma pessoa da terceira idade</b>";

    }
}
?>

    <form method="POST">
    <input type="text" name="idade">
    <input type="submit">
    <a><br>Diz se você é: criança/adolecente, adulto ou terceira idade.</a>

    </body>
</html>