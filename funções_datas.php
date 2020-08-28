<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>

    <?php
      /*recuperação da data corrente - data atual
      echo date('d/m/Y H:i').'</br>';// Identificando o Dia/Mês/Ano Hora:Minuto 
      echo date_default_timezone_get(); 
    
      */
      $data_inicial = '2020-04-24';
      $data_final = '2020-05-15';
      
      //timestamp - Realiza calculos de datas a partir de 01/01/1970

      $time_inicial = strtotime($data_inicial);
      $time_final = strtotime($data_final);
    
      echo $data_inicial. ' ' .$time_inicial; 
      echo '<br/>';
      echo $data_final. ' ' .$time_final; 

      $diferenca_time = $time_final - $time_inicial;
      
      echo '<br/>';
      echo 'A diferença de segundos entre as datas é '.$diferenca_time;

      $quantos_segundos_dia = 24 *60 *60; 
      echo '<br/>';
      echo 'Um dia possui: ' .$quantos_segundos_dia; 

      $diferenca_dias_entre_datas = $diferenca_time / $quantos_segundos_dia;

      echo '<br/>';
      echo 'Diferença de dias entre as datas: '.$diferenca_dias_entre_datas; 

    ?>
    

</body>
</html>