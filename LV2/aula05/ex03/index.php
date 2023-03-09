<?php

    include_once '../obj/calculadora.php';

    $calcular = new Calculadora(); 
    $calcular->x = 50;
    $calcular->y = 20;
    
    echo "{$calcular->x} + {$calcular->y} = ". $calcular->sum($calcular->x,$calcular->y)."<br>";
    echo "{$calcular->x} - {$calcular->y} = ". $calcular->sub($calcular->x,$calcular->y)."<br>";
    echo "{$calcular->x} x {$calcular->y} = ". $calcular->mult($calcular->x,$calcular->y)."<br>";
    echo "{$calcular->x} / {$calcular->y} = ". $calcular->div($calcular->x,$calcular->y);
//sim eu sei que da pra fazer de outro jeito mas to com preguiça
?>