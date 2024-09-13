<?php

class Carro{
    private $ligado, $vAtual, $vMax, $msg;

    public function __construct($vm){
        
        $this->setLigado(false);
        $this->setVatual(0);
        $this->setVmax($vm);

    }
    //MÉTODOS SETTERS
    public function setLigado($l){
        $this-> ligado = $l;
    }

    public function setVatual($va){
        $this -> vAtual = $va;
    }

    public function setVmax($vm){
        $this -> vMax = $vm;
    }

    public function setMsg($msg){
        $this -> msg = $msg;
    }

    //MÉTODOS GETTERS 
    public function getLigado(){
        return $this -> ligado;
    }

    public function getVatual(){
        return $this -> vAtual;
    }

    public function getVmax(){
        return $this -> vMax;        
    }

    public function getMsg(){
        return $this -> msg;        
    }

    //MÉTODOS ESPECÍFICOS
    public function acelerar($vel){
        if($this->getLigado()==true):
            if($this->getVatual() + $vel < $this->getVmax()):
        else:
            $this->setVatual($this->getVmax());
            $this->setMsg('Velocidade máxima atingida!');

            endif;
        
        else:
            $this->setMsg('O carro está desligado.');
            
        endif;
    }

    public function ligar(){
        $this->setLigado(true);
    }
}

?>