<?php
    $nsort = rand(1,99);
    echo $nsort. "<br>";

    switch($nsort){
        case 17:
            echo "João ganhou";
            break;
        case 67:
            echo "Leonardo ganhou";
            break;
        case 21:
            echo "Esdras ganhou";
            break;
        case 33:
            echo "Igor ganhou";
            break;
        case 12:
            echo "Manu ganhou";
            break;
        case 7:
            echo "Vini ganhou";
            break;
        case 4:
            echo "Maculan ganhou";
            break;
        case 69:
            echo "Thales ganhou";
            break;
        case 6:
            echo "Caua ganhou";
            break;
        case 75:
            echo "Zimmerman ganhou";
            break;
        default:
            echo "Ninguem venceu";
    }
?>