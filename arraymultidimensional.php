<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>

    <?php
      //$lista_frutas = array('Banana', 'Maça', 'Morango','Pêra', 'Abacate'); 
      $lista_frutas = [ 'a'=>'Banana', 
                        'b'=>'Maça', 
                        'c'=>'Morango', 
                        'd'=>'Pêra', 
                        'e'=>'Abacate']; // Um Array pode ser declarado usando parenteses ou colchetes

      $lista_frutas[f] = 'Abacaxi'; 

    echo '<pre>';
      var_dump($lista_frutas);
    echo '</pre>';
      echo '<hr>';
    echo '<pre>';
      print_r($lista_frutas);  
    echo '</pre>';
      
    /*Procutando por item do array por indice numerico
    echo '<hr>';
    echo $lista_frutas[5]; 
    echo '<hr>';*/

    echo '<hr>';
    echo $lista_frutas[f]; 
    echo '<hr>'; 
    ?>
    

</body>
</html>