<?php

    class Calculadora{
        public $x;
        public $y;

        public function sum($x,$y){
            return $x + $y;
        }

        public function sub($x,$y){
            return $x - $y;
        }

        public function mult($x,$y){
            return $x * $y;
        }

        public function div($x,$y){
            return $x / $y;
        }

    }

?>