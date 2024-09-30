<?php
require_once '../Modelo/ClassProduto.php';
require_once '../Modelo/DAO/ClassProdutoDAO.php';

$id =@$_POST['id'];
$produto = @$_POST['produto'];
$valor = @$_POST['valor'];
$qtd = @$_POST['qtd'];
$acao = $_GET['ACAO'];


$novoProduto = new ClassProduto();
$novoProduto->setIdProduto($id);
$novoProduto->setProduto($produto);
$novoProduto->setValor($valor);
$novoProduto->setQtd($qtd);

$classProdutoDAO = new ClassProdutoDAO();
switch ($acao) {
	case "venderProduto":
        $produto = $classProdutoDAO->vender($novoProduto);
	    if($produto >= 1){
            header('Location:../index.php?&MSG= Venda realizada com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possivel realizar a venda!');
        }
        break;
 }
