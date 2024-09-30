<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title></title>
</head>

<body>
<div>
<div>
<h4> Produtos</h4>
         <form method="post" action="./Controle/ControleProduto.php?ACAO=venderProduto">
               <p> Produto:<input type="text" id="produto" name="produto" maxlength="40" placeholder="Digite o produto" /></p>
               <p> Valor:<input type="number" id="valor" name="valor" maxlength="40" placeholder="Digite o valor" /></p>
               <p> Quantidade:<input type="number" id="qtd" name="qtd" maxlength="40" placeholder="Digite a quantidade" /></p>
                <button type="submit" value="Registrar">Registrar</button>
                <button type="reset" value="Limpar">Limpar</button>
        </form>
</div>
  
</body>

</html>