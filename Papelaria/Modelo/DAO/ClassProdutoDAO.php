<?php
require_once 'Conexao.php';
class ClassProdutoDAO
{
    public function vender(ClassProduto $venderProduto)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO produto (produto, valor, qtd) values (?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, 
            $venderProduto->getProduto());
            $stmt->bindValue(2, 
            $venderProduto->getValor());
            $stmt->bindValue(3, 
            $venderProduto->getQtd());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
	
    public function listarProdutos()
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM produto order by (produto) asc";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $produto = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $produto;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
