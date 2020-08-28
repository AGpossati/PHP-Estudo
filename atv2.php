<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>

    <?php
       function impostoRenda($salario){

        $imposto = 0;

        if ($salario <= 1904.98){ 
            $imposto = (0);
        }else if($salario >= 1904.98 && $salario <= 2826.60){
            $imposto = ($salari * 7.5)/100; 
        }else if($salario >= 2826.60 && $salario <= 3751.90){
            $imposto = ($salario * 15)/100; 
        }else if($salari >= 3751.90 && $salario <= 4664.50){
            $imposto = ($salario * 22.5)/100; 
        }else {
            $imposto = ($salario * 27.5)/100;
        
        }
        return $imposto; 
    }echo impostoRenda(5000); 

    ?>

</body>
</html>