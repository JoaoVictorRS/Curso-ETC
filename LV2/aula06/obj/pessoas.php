<?php

    class Pessoa{

        public $nome;
        private $email;
        private $sexo;
        private $dataNascimento;

        public function message(){
            echo "Olá seu nome é {$this->nome}, certo?";
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

        public function getDataNascimento(){
            return $this->dataNascimento;
        }
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }

        public function toString(){
            return "Nome: $this->nome<br>Email: $this->email<br>Data de nascimento: $this->dataNascimento<br>Sexo: $this->sexo";
        }
    }

?>