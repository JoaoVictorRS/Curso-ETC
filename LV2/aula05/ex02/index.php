<?php

    include_once '../obj/pessoas.php';

    $p1 = new Pessoa();
    $p2 = new Pessoa();
    $p1->nome= "Eduardo";
    $p2->nome= "Monica";

    echo $p1->message()."<br>";
    echo $p2->message();

?>