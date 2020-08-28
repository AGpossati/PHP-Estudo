<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>

    <?php
        //void = função sem retorno 
        function boasVindas(){
            echo 'Dem vindos ao curso de PHP <br/>';
        }

        boasVindas();
        boasVindas();
        boasVindas();
        
        //return = função com retorno
        function calcularAreaTerreno($largura, $comprimento){
            $area = $largura * $comprimento;
            return $area; 
        }
        echo calcularAreaTerreno(50, 30);
        echo '<br/>';  
        

        $return = calcularAreaTerreno(50, 30);
        echo $return; 
    ?>

</body>
</html>