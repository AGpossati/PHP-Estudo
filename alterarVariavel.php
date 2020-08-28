<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <?php
       $nome = 'Jesus'; //String 
       $idade = 28; // int
       $peso = 76.09; // float 
       $fumante_sn = true; // boolean (true = 1 ou false)

       //------LOGÍCA------//

       $idade = 30; //Declarar novamente a idade faz com que o valor se sobreponha ao primeiro
    ?>
    <h1>Ficha de Inscriçaõ</h1>
    <br/>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>
</html>