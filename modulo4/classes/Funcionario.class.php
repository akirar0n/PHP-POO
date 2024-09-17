<?php

require_once 'Principal.class.php';

class Funcionario extends Principal{
    private $cargo, $salario;

    //setters

    public function setCargo($c){
        $this->cargo = $c;
    }

    public function setSalario($s){
        $this->salario = $s;
    }

    //getters

    public function getCargo(){
        return $this->cargo;
    }

    public function getSalario(){
        return $this->salario;
    }

    //metodos
    public function validar($n, $t, $e, $c, $s){
        $this->setNome($n);
        $this->setTelefone($t);
        $this->setEmail($e);
        $this->setCargo($c);
        $this->setSalario($s);
    }

    public function exibir(){
        echo "Funcionário: {$this->getNome()} <br>";
        echo "Telefone: {$this->getTelefone()} <br>";
        echo "E-mail: {$this->getEmail()} <br>";
        echo "Cargo: {$this->getCargo()} <br>";
        echo "Salário: {$this->getSalario()} <br><br>";
        //$this->enviarEmail().'<br>';
    }

    public function enviarEmail(){
        echo "Dados do pagamento: {$this->getSalario()} <br><br>";
    }
}

?>