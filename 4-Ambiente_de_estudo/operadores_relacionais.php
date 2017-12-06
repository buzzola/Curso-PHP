<?php
//Aprofundando o estudo dos operadores relacionais

        echo "<b>Igualdade</b>" . "<br>";
        var_dump(10==10);
        echo "<br>";
        var_dump(10==11);
        echo "<br>";
        var_dump(11=="11");
        echo "<br><br>";

        echo "<b>Diferente</b>" . "<br>";
        var_dump(10 != 10);
        echo "<br>";
        var_dump(10 != 11);
        echo "<br>";
        var_dump(10 <> 10);
        echo "<br><br>";

        echo "<b>Idêntico</b>" . "<br>";
        var_dump(10 === 10);
        echo "<br>";
        var_dump(10 === "10");
        echo "<br>";
        echo "<br><br>";

        echo "<b>Não idêntico</b>" . "<br>";
        var_dump(10 !== 10);
        echo "<br>";
        var_dump(10 !== "10");
        echo "<br>";
        echo "<br><br>";

        echo "<b>Menor e maior</b>";
        echo "<br>";
        var_dump(10 < 10); //10 é menor que 10
        echo "<br>";
        var_dump(10 > 10); //10 é maior que 10
        echo "<br><br>";
        
        echo "<b>Menor ou igual e Maior ou igual</b>";
        echo "<br>";
        var_dump(10 <= 10); //10 é menor ou igual a 10
        echo "<br>";
        var_dump(10 >= 10); //10 é maior ou igual a 10
        echo "<br><br>";
        
        