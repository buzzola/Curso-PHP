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

    if($idade < 0 || $idade >= 130){
        echo "<center><b>A idade inserida não é uma idade válida.</b></center>";
    }elseif($idade == 0){
        echo "<center><b>A idade inserida é de um recem nascido</b></center>";
    }elseif($idade >= 1 && $idade <= 2){
        echo "<center><b>A idade inserida é de um bebê.</b></center>";
    }elseif($idade > 2 && $idade < 13){
        echo "<center><b>A idade inserida é de uma criança.</b></center>";
    }elseif($idade >= 13 && $idade < 18){
        echo "<center><b>A idade inserida é de um adolecente.</b></center>";
    }elseif($idade >= 18 && $idade < 60){
        echo "<center><b>A idade inserida é de um adulto.</b></center>";
    }elseif($idade >= 60 && $idade <= 122){
        echo "<center><b>A idade inserida é de um idoso</b></center>";
    }elseif($idade > 122){
        echo "<center><b>A idade inserida é de um idoso muito velho.</b></center>";
    }
}
?>
<center>
    <form method="POST">
    <input type="text" name="idade" min="0" max = "200" placeholder="insira aqui sua idade">
    <input type="submit">
    
    <a><br>Diz se a idade inserida é de: criança, adolecente, adulto ou terceira idade.</a>
</center>
    </body>
</html>