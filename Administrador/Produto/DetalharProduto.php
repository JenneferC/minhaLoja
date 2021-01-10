<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="../../Css/estilo1.css">
        <meta charset="UTF-8">
        <title>Jhenny's Shoes</title>
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
         <br><br><br><br>

    <table border = 1>
            <tr>
                <th><h6>ID</h6></th>
                <th><h6>IMAGEM</h6></th>
                <th><h6>NOME</h6></th>
                <th><h6>PREÇO</h6></th>
                <th><h6>DESCRIÇÃO</h6></th>
                <th><h6>CATEGORIA</h6></th>
            </tr>
    <?php    
        require "../../Banco/ConexaoBanco.php";
        $IdProduto = $_GET['IdProduto'];
        $Comando = "SELECT * FROM Produto WHERE IdProduto = $IdProduto";
        $Result = mysqli_query($Conexao_Banco, $Comando);
        $Dados = array(); 
        while ($Dados = mysqli_fetch_assoc($Result)){
    ?>
     
                <tr>
                    <td><h6><?=$Dados['IdProduto']?></h6></td>
                    <td><h6><img src="../../<?=$Dados['ImagemProduto']?>"></h6></td>
                    <td><h6><?=$Dados['Nomeproduto']?></h6></td>
                    <td><h6><?=$Dados['PrecoProduto']?></h6></td>
                    <td><h6><?=$Dados['DescricaoProduto']?></h6></td>
                    <td><h6><?=$Dados['IdCategoria']?></h6></td>
                </tr>
                <?php }?>
        </table>

					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     <div class="rodape">
        <div class="ti"><a href="../Visão/AdministradorIndex.php"><strong>Voltar</strong></a></div>
    </div>
    </body>
</html>
