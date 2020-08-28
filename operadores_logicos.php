<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        //diferente <> ou !=
        // identico ===
        // igual ==
        // não identico !== Se os VALORES e TIPOS comparados são identicos 
        // menor < 
        //maior >
        // menor <=
        // maior >= 
        // E-> && Esse operador apenas retorna verdadeiro caso ambos os operadores sejam vrdadeiro
        // OU-> || Esse operador retorna um resultado verdadeiro caso uma das expressões forem verdadeiras
        // XOR Verdadeira apenas se uma das expressões forem verdadeiras, mas não ambas 
        // NEGAÇÃO-> ! Inverte o resultado, por exemplo, um resultado que deveria ser falso passa a ser verdadeiro   

        if(8 == 9 && 10 > 6){
            echo 'Verdadeiro'.'<br/>';
        }else{
            echo 'Falso'.'<br/>';
        }

        if(8 == 9 || 10 > 6){
            echo 'Verdadeiro'.'<br/>';
        }else{
            echo 'Falso'.'<br/>';
        }

        if(8 < 9 xor 10 > 6){
            echo 'Verdadeiro'.'<br/>';
        }else{
            echo 'Falso'.'<br/>';
        }

        if(!(8 > 9 || 10 < 6)){
            echo 'Verdadeiro'.'<br/>';
        }else{
            echo 'Falso'.'<br/>';
        }

        // Usar () para estabelecer precedência

        if((8 <> 9 && 9 > 7) || 9 < 6){
            echo 'Verdadeiro' .'<br/>'; 
        }else {
            echo 'Falso' .'<br/>';
        }
    ?>
    
</body>
</html>