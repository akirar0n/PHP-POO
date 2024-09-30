<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script language="javaScript" type="text/javascript">
function checkDelete(){
    return confirm('Deseja continuar?');
}
</script>
</head>
<body>
    
<?php
    require './Modelo/ClassProduto.php';
    require './Modelo/DAO/ClassProdutoDAO.php';

    $classProdutoDAO = new ClassProdutoDAO();
    $pr = $classProdutoDAO->listarProdutos();
    echo "<table>";
    echo "  <tr>";
    echo "      <th><p align='center'>Produto </p></th> ";
    echo "      <th><p align='center'>Valor</p></th> ";
    echo "      <th><p align='center'>Quantidade</p></th> ";
    echo "      <th><p align='center'>Total</p></th> ";
    echo "  <tr>";

    foreach ($pr as $pr) {
        echo "<tr>";
        echo "<td><p align='center'>" . $pr['produto'] . "</p></td>";
        echo "<td><p align='center'>" . $pr['valor'] . "</p></td>";
        echo "<td ><p align='center'>" . $pr['qtd'] . "</p></td>";
        echo "</tr>"; 
    }
    echo "</table>";
    echo "<div>";  
    ?>
</body>
</html>





