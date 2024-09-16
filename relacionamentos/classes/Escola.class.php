<?php

    class Escola{
        private $nome;
        
        public function __construct($n){
            $this->setNome($n);
        }

        public function setNome($n){
            $this->nome = $n;
        }

        public function getNome(){
            return $this->nome;
        }
    }
?>