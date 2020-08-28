<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <?php

        $nome = 'Augusto';
        $cor = 'verde';
        $idade = 27;
        $animal_favorito = 'papagaios'; 
        $atividade_favorita = 'conspirar';

        // operador . serve para concatenar um valor de uma variável a um texto 
       echo 'Olá '.$nome.', vi que sua cor favorita é o '.$cor.', que vc tem '.$idade.' anos e gosta de '.$animal_favorito.'';

       echo '<br>';

       // ASPAS DUPLAS geram o mesmo efeito de concatenação que o uso do .
       echo "Olá $nome, vi que você tem preferencia pela cor $cor, que sua idade é $idade anos e que gosta de $atividade_favorita"
    ?>
    
</body>
</html>