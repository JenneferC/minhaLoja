<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="Css/estilo1.css">
        <title>Jhenny's Shoes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>  
    <?php
    require "../../Banco/ConexaoBanco.php";
	$Imagem = $_FILES['Imagem']['name'];
	$Destino = 'Imagens/'.$Imagem;
	
    $NomeProduto = $_POST['NomeProduto'];
    $Descricao = $_POST['DescricaoProduto'];
    $IdCategoria = $_POST['Categoria'];
    $Preco = $_POST['Preco'];

    $BancoSql = "INSERT INTO Produto (IdProduto, IdCategoria, ImagemProduto, NomeProduto, DescricaoProduto, PrecoProduto)
    VALUES (NULL,'$IdCategoria','$Destino','$NomeProduto','$Descricao','$Preco')";
    $Inserir = mysqli_query($Conexao_Banco, $BancoSql);
        if($Inserir == true){
            echo "Registro do Produto feito com secesso!";
        }else{
            die("Registro falhou!".mysqli_error($Conexao_Banco));
        }
?>
<br>
        <a href="../Visão/AdministradorIndex.php">VOLTAR</a>
    </body>
</html>

