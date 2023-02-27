<?php

    function verificarDados(){
        if(isset($_POST['email']) && empty($_POST['email'])){
            echo "É necessario inserir um email<br>";
        }elseif(isset($_POST['password']) && empty($_POST['password'])){
            echo "É necessario inserir uma senha<br>";
        }else{
            return true;
        };
    }

    function verificarUsuario(){
        if(verificarDados() == true){
            strtolower(trim($_POST['email']));
            strtolower(trim($_POST['password']));
            return true;
        };
    }

    if(verificarDados() == true && verificarUsuario() == true){
        echo "Bem vindo!";
    }

    echo "<br><a href='index.php'>Voltar para pagina anterior</a>";
?>