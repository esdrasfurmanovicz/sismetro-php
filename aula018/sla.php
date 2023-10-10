<?php
    $a = 15;
    $b = 2.7;

    $soma = $a + $b;
    echo $soma."<br>";
    
    $subtr = $a - $b;
    echo $subtr."<br>";

    $mult = $a * $b;
    echo $mult."<br>";

    $divis = $a / $b;
    echo $divis."<br>";

    if($soma < 10){
        echo "soma menor que 10 <br>";
    }else{
        echo "soma maior ou igual a 10<br>";
    }

    if($subtr > 20){
        echo "subtração maior que 20<br>";
    }elseif($subtr == 20){
        echo "Subtração igual a 20<br>";
    }else{
        echo "Subtração menor que 20<br>";
    }

    $v = 0;

    switch($v){
        case 10:
            echo "oi";
            break;
        case 10:
            echo "oi";
            break;
    }
?>