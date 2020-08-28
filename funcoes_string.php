<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>

    <?php
        $texto = 'welcome stranger';

        // To Lower -> Converte todos os caracteres para minusculo
        echo $texto;
        echo '<br/>'; 
        echo strtolower ($texto); 

        echo '<hr>';
        // To Upper -> Converte todos os caracteres para maisculos 
        echo $texto;
        echo '<br/>';
        echo strtoupper ($texto); 

        echo '<hr>';
        // Upper Case First -> Converte o primeiro caractere da primeira palavra para maisculo
        echo $texto;
        echo '<br/>';
        echo ucfirst ($texto); 

        echo '<hr>';
        // String Length -> Converte os caracteres da String para um numero corespondente ao numero de letras da String (inclusive espaços)
        echo $texto;
        echo '<br/>';
        echo strlen ($texto); 

        echo '<hr>';
        // String Replace -> Localiza uma palavra ou sentença dentro da string e a substitui pelo oque vc julgar conveniente
        echo $texto;  
        echo '<br/>';
        echo str_replace('stranger', 'friend', $texto); 
        echo '<br/>';
        echo str_replace('.', ',', '22.99'); // str_replace pode ser usado pra formatar datas e valores numericos 

        echo '<hr>';
        // String Replace -> 
        echo $texto;  
        echo '<br/>';
        echo str_replace('stranger', 'friend', $texto); 

        echo '<hr>';
        // String Replace -> Seleciona a sequência de caracteres numeradas considerando suas posições  
        echo $texto .'<br/>';
        //welcome stranger
        // 1 2 3 4 5 6 7 8 
        echo substr($texto, 0, 7) .' ...'; 

    ?>
    

</body>
</html>