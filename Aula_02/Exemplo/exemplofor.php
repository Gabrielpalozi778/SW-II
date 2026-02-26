<?php

    for ($i=0; $i < 20; $i++){
        echo $i;
        echo "<br>";
    }

    echo "<hr>";

    $nomes = ["Ciclano","Beltrano","Deltrano","Fulano","Euzébio"];

    echo $nomes[0];
    echo "<br>";
    echo $nomes[1];
    echo "<br>";
    echo $nomes[2];
    echo "<br>";
    echo "<hr>";

    $qtde = count($nomes);
    echo $qtde;
    echo "<br>";
    echo "<hr>";

    for ($i=0; $i <= 4; $i++){
        echo $nomes[$i];
        echo "<br>";
    }

    echo "<hr>";

    $nomes1 = ["A","B","C","D","E"];

    foreach ($nomes1 as $key => $value) {
        echo $key;
        echo " ----> ";
        echo $value;
        echo "<br>";

    }

?>