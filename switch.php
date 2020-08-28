<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>

    <?php
        $parametro = 9.99;

        switch($parametro){
            case ($parametro >= 10 && $parametro <=15):
                echo 'Entre 10 e 15';
            break;
            case ($parametro >= 5 && $parametro < 10):
                echo 'Entre 5 e 10';
            break;
            case ($parametro >= 1 && $parametro < 5): 
                echo 'Entre 1 e 5';
            default:
                echo 'Não corresponde a nenhum caso';
            break; 
        }
    ?>

</body>
</html>