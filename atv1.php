<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>

    <h2>O doador atende aos requisitos?</h2>
    <br>
    <?php

        $doar_sanque = false;
        $idade = 14;
        $peso = 70.8;
        
        if(($idade >= 16 && $idade <= 69) && $peso > 50){
            echo 'Sim. Atende aos Requisitos Necessários';
        }else{
            echo 'Não. Não Atende aos Requisitos Necessários'; 
        }
    ?>

</body>
</html>