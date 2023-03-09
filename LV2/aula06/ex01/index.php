<?

    include_once '../obj/pessoas.php';

    $p1 = new Pessoa();
    $p1->nome = "Jair Imbroxavel";
    $p1->getEmail("jair_mito1722@gmail.com");
    $p1->getSexo("Masculino");
    $p1->getDataNascimento("17/02/1954");
    $p2 = new Pessoa();
    $p2->nome = "Chester";
    $p2->getEmail("meteora_2003@gmail.com");
    $p2->getDataNascimento("15/05/1983");
    $p2->getSexo("Masculino");

    echo $p1->toString()."<br>";
    echo $p2->toString();

?>