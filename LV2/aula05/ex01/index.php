<?php

    include_once '../obj/pessoas.php';

    $p1 = new Pessoa();
    $p2 = new Pessoa();
    $p1->nome= "Eduardo";
    $p2->nome= "Monica";

    echo "Olá seu nome é {$p1->nome}, certo?<br>";
    echo "Olá seu nome é {$p2->nome}, certo?<br>";;

?>