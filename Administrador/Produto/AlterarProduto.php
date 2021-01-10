<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="../../Css/estilo1.css">
        <title>Jhenny's Shoes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <div id="pai"><h1 id="salmon">Jhenny´s Shoes</h1>
        <div id="cab1"><div id="cab">
            <div id="c1"> <a href="../../descrição.html">Descrição do site</a><br></div>
            <div id="c2"> <a href="../../Cliente/CadastroCliente.php">Cadastre-se</a><br></div>
            <div id="c3"> <a href="../../login.html">Login</a><br></div>
            <div id="c4"> <a href="../../carinho.html">Carrinho de compras</a><br></div>
            <div id="c5"> <a href="../Visão/AdministradorIndex.php">Administrador</a><br></div>
            </div></div>
        </div>
    </head>
    <body>  

    <?php

require "../../Banco/ConexaoBanco.php";

$IdProduto = $_POST["IdProduto"];
$NomeProduto = $_POST["NomeProduto"];    
$DescricaoProduto = $_POST["DescricaoProduto"];
$Categoria = $_POST["Categoria"];
$Preco = $_POST["Preco"];


    $BancoSql = "UPDATE Produto SET Nomeproduto ='$NomeProduto', DescricaoProduto ='$DescricaoProduto',
     IdCategoria ='$Categoria', PrecoProduto ='$Preco' WHERE IdProduto = '$IdProduto'";
        $Update = mysqli_query($Conexao_Banco, $BancoSql);
            if($Update == true){
                echo "Atualização do aluno feito com secesso!";
            }else{
                die("Atualização falhou!".mysqli_error($Conexao_Banco));
            }
?>
        <div class="rodape">
        <div class="ti"> <a href="../Visão/AdministradorIndex.php"><strong>Adiministrador</strong></a></div>
    </div>
    </body>
</html>