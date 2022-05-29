<?php
    require_once 'conexao.php';
    $conexao = new conexao;
?>

<html>
<head>
    <title>Teste de conexão</title>
</head>
<body>
    <?php
        echo "Teste de Conexão Mysql - inicio!! <br><br>";
        echo $conexao->testar_banco();
        echo "<br><br> teste de conexão Mysql - fim!";
    ?>
</body>
</html>