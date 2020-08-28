<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>

    <?php
       //gettype() = retorna o tipo da variável 

       $valor = true;
       $valor2 = (string)$valor;
       $valor3 = (int)$valor2;

       //$valor = 'abc';
       //$valor2 = (boolean)$valor; // boolean ou bool

       //$valor = '15.65';
       //$valor2 = (int)$valor;

       //$valor = 15.65;
       //$valor2 = (string)$valor;

        //$valor = 15.65;
        //$valor2 = (int)$valor;

       //$valor = '10';
       //$valor2 = (double)$valor; // valores reais são caracterizados como double, real ou float

       echo $valor. ' ' .gettype ($valor);
       echo '</br>';
       echo $valor2. ' ' .gettype ($valor2); 
       echo '</br>';
       echo $valor3. ' ' .gettype ($valor3);
    ?>

</body>
</html>