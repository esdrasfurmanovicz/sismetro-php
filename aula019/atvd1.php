<?php
    $lista = array(
        array("BD",9),
        array("Analise", 8),
        array('CC', 10),
        array("Front", 9),
        array("Prog. Mobile", 7),
        array("PT", 10),
        array("MAT", 9),
        array("Hist", 8),
        array("GEO", 9),
        array("QUIM", 7),
        array("BIO", 10),
        array("Socio", 9),
        array("Proj. V", 8),
        array("Ed. Finan", 10),
        array("Ingles", 10)
    );

// BD, analise, CC, Front, Mobile, PT, MAT, hist, GEO, QUI, BIO, SOC, proj, edf
    foreach($lista as $lista){
        echo $lista[0]." - ".$lista[1]."<br>";
    }

?>