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

    $Categoria = $_POST['Categoria'];

    $BancoSql = "INSERT INTO Categoria (IdCategoria,DescricaoCategoria)
    VALUES (NULL,'$Categoria')";
    $Inserir = mysqli_query($Conexao_Banco, $BancoSql);
        if($Inserir == true){
            echo "Registro da Categoria feito com sucesso!";
        }else{
            die("Registro falhou!".mysqli_error($Conexao_Banco));
        }
?>
<br>
    <a href="../Visão/AdministradorIndex.php">VOLTAR</a>
</body>
</html>