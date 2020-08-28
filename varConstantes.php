<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        define('DB_URL', 'endereco_db_url');
        define('DB_USUARIO', 'usuario_db');
        define('DB_SENHA', 'senha_db');

        /* Pela logica, ao definir uma variável como constante o valor não pode ser sobreposto  
        define('DB_URL', 'endereco_db_user')
        */

        echo DB_URL . '<br/>';
        echo DB_USUARIO . '<br/>';
        echo DB_SENHA . '<br/>';
    ?>
    
</body>
</html>