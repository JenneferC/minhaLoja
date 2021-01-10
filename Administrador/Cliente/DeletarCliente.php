<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Css/estilo.css">
        <link rel="stylesheet" href="Css/index.css">
        <meta charset="UTF-8">
        <title>Administrador</title>
    </head>
<body>
    <?php
    require "../../Banco/ConexaoBanco.php";
    $IdCliente = $_GET['IdCliente'];
    $Comando = "DELETE FROM Cliente WHERE IdCliente = $IdCliente";
    $Result = mysqli_query($Conexao_Banco, $Comando);
    if ($Result){
        echo "Cliente excluido com sucesso!";
    }else{
        echo "Erro ao excluir Cliente";
    }
?>
    <br>
    <a href="../Visão/AdministradorIndex.php">VOLTAR</a>
</body>
</html>

