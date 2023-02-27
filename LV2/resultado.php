<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(isset($_POST['email']) && !empty($_POST['email']) || isset($_POST['password']) && !empty($_POST['password'])){
        echo "Dados do usuario: <br>";
        echo $email."<br>";
        echo $password;
    }else
        echo "Os valores não podem ser nulos ou vazios <br>";

    echo "<br><a href='index.php'>Voltar para pagina anterior</a>";
?>