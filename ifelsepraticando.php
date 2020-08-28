<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        /*$cartao_cliente = true;
        $valor_compra = 50; 
        $valor_frete = 50; 

        if($cartao_cliente == true && $valor_compra > 100){
            echo 'Não está sujeito a cobrança do frete';
        }else {
            echo "Valor do frete igual a $valor_frete";
        }*/

        $cartao_cliente = true;
        $valor_compra = 500; 
        $valor_frete = 50; 
        $recebeu_desconto = false;


        if($cartao_cliente == true && $valor_compra > 100){
            $valor_frete = 0;
            $recebeu_desconto = true;
        } 
    ?>
    <h1>Desconto no Pedido</h1>
    <p>Possui cartão da loja?
    
    <?php  
        if($cartao_cliente == true){
            echo 'SIM';
        }else{
            echo 'NÃO'; 
        }
    ?>
    </p>

    <p>Valor da Compra: <?= $valor_compra ?></p>

    <p>Recebeu Desconto no frete?
    
    <?php  
        if($recebeu_desconto == true){
            echo 'SIM';
        }else{
            echo 'NÃO'; 
        }
    ?>
    </p>
    <p>Desconto no Frete: <?= $valor_frete ?></p>

</body>
</html>