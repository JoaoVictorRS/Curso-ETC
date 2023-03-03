<?php
    class Pessoas{
        public $cpf;
        public $nome;
        public $sexo;
    }

    $p1 = new Pessoas();
    $p1->cpf = "783.182.381-31";
    $p1->nome = "Jair Messias Bolsonaro";
    $p1->sexo = "Masculino";

    $p2 = new Pessoas();
    $p2->cpf = "432-612-942-93";
    $p2->nome = "Luiz Inacio Lula da Silva";
    $p3->sexo = "Não assumido";

    print_r($p1);
    echo "<br><br>";
    print_r($p2);
?>