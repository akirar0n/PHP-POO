<?php

class Principal{
    private $nome, $telefone, $email;

    //Setters
    public function setNome($n){
        $this->nome = $n;
    }

    public function setTelefone($t){
        $this->telefone = $t;
    }

    public function setEmail($e){
        $this->email = $e;
    }

    //Getters
    public function getNome(){
        return $this->nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function enviarEmail(){
        echo "Enviando email...";
    }
}

?>