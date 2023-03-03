<?php
    session_start();

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
                $_SESSION['email'] = strtolower(trim($_POST['email']));
                $_SESSION['password'] = strtolower(trim($_POST['password']));
                //EU TINHA LIDO ERRADO AQUI AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                $email_db = 'usuario@gmail.com';
                $password_db = '123';

                    if($email_db == $_SESSION['email'] && $password_db == $_SESSION['password']){
                    return true;
            };
        }
    }

    if(verificarDados() == true && verificarUsuario() == true){
        echo "Bem vindo!";
        print_r($_SESSION);

    }

    echo "<br><a href='index.php'>Voltar para pagina anterior</a>";
?>