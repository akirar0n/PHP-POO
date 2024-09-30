<?php
class ClassProduto
{
    private $idProduto;
    private $produto;
    private $valor;
    private $qtd;

    // GETTERS
    function getIdProduto()
    {
        return $this->idProduto;
    }

    function getProduto()
    {
        return $this->produto;
    }

    function getValor()
    {
        return $this->valor;
    }

    function getQtd()
    {
        return $this->qtd;
    }

    // SETTERS
    function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;
    }

    function setProduto($produto)
    {
        $this->produto = $produto;
    }

    function setValor($valor)
    {
        $this->valor = $valor;
    }

    function setQtd($qtd)
    {
        $this->qtd = $qtd;
    }

    public function total($total){
        $this->valor * $this->qtd = $total;
    }
}
