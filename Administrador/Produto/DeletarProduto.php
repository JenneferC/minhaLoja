<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Css/estilo1.css">
        <link rel="stylesheet" href="Css/index1.css">
        <meta charset="UTF-8">
        <title>Administrador</title>
    </head>
<body>
    <?php
    require "../../Banco/ConexaoBanco.php";
    $IdProduto = $_GET['IdProduto'];
    $Comando = "DELETE FROM Produto WHERE IdProduto = $IdProduto";
    $Result = mysqli_query($Conexao_Banco, $Comando);
    if ($Result){
        echo "Produto excluido com sucesso!";
    }else{
        echo "Erro ao excluir Produto";
    }
?>
    <br>
    <a href="../Visão/AdministradorIndex.php">VOLTAR</a>
</body>
</html>

