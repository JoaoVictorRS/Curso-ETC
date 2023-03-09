<?php
    include_once 'carros.php';

    $c1 = new Carros();
    $c1->ano = 2021;
    $c1->combustivel = "Flex";
    $c1->cor = "Branco";
    $c1->marca = "Fiat";
    $c1->modelo = "Uno";
    $c1->placa = "JKF-3292";

    $c2 = new Carros();
    $c2->ano = 1998;
    $c2->combustivel = "Gasolina";
    $c2->cor = "Roxo";
    $c2->marca = "Volkswagen";
    $c2->modelo = "Gol 1.0";
    $c2->placa = "SEX-0069";

    print_r($c1);
    echo "<br>";
    print_r($c2);

?>