<?php

    class Aluno{
        private $nome, $escola;

        public function __construct($n, $e){
            $this->setNome($n);
            $this->setEscola($e);
        }

        public function setNome($n){
            $this->nome = $n;
        }

        public function setEscola($e){
            $this->escola = $e;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEscola(){
            return $this->escola;
        }
    }

?>