<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>

    <h3>PÓS-INCREMENTO</h3>
        <?php
        
        $a = 7; 

        echo "O valor contido em a é $a <br/>";
        echo 'O valor contido em a após o incremento é '.$a++.' <br/>';
        echo "O valor atualizado é $a"
        ?>

    <h3>PRÉ-INCREMENTO</h3>
        <?php
        
        $a = 7; 

        echo "O valor contido em a é $a <br/>";
        echo 'O valor contido em a após o incremento é '.++$a.' <br/>';
        echo "O valor atualizado é $a"
        ?>

    <h3>PÓS-DECREMENTO</h3>
        <?php
        
        $a = 7; 

        echo "O valor contido em a é $a <br/>";
        echo 'O valor contido em a após o incremento é '.$a--.' <br/>';
        echo "O valor atualizado é $a"
        ?>

    <h3>PRÉ-DECREMENTO</h3>
        <?php
        
        $a = 7; 

        echo "O valor contido em a é $a <br/>";
        echo 'O valor contido em a após o incremento é '.--$a.' <br/>';
        echo "O valor atualizado é $a"
        ?>

</body>
</html>