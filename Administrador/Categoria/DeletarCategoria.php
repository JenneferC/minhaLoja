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
    $Id = $_GET['IdCategoria'];
    $Comando = "DELETE FROM Categoria WHERE IdCategoria = $Id";
    $Result = mysqli_query($Conexao_Banco, $Comando);
    if ($Result){
        echo "Categoria excluida com sucesso!";
    }else{
        echo "Erro ao excluir Categoria";
    }
?>
    <br>
    <a href="../Visão/AdministradorIndex.php">VOLTAR</a>
</body>
</html>