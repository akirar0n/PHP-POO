<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
    include('menu.php');
    ?> 
    <form method = "POST" action = "desconto.php">
    <center>   
        <fieldset>
            <h3> Insira o valor da venda e a quantidade de parcelas:</h3>
            Valor da Venda: <input type="text" name="n1"> <br> <br>
            Quantidade de parcelas: <input type="text" name="n2"> <br> <br>
            <button type="submit" class="btn btn-primary" name="acao"> Enviar </button>
        </fieldset>
    </center>
    </form>
</body>
</html>