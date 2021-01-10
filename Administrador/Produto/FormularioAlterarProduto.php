<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="../../Css/estilo1.css">
		 <link rel="stylesheet" href="../../Css/centrarl.css">
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
        $BancoSql = "SELECT * FROM Categoria";
        $Lista = mysqli_query($Conexao_Banco, $BancoSql);
        $Dados = array();
    ?>           

<?php
    $IdProduto= $_GET['IdProduto'];
    //Conexão Banco
    require_once "../../Banco/ConexaoBanco.php";
    $Comando = "SELECT * FROM Produto WHERE IdProduto = $IdProduto";
    $Result = mysqli_query($Conexao_Banco, $Comando);
    $Dados = array();
    $Dados = mysqli_fetch_assoc($Result);
?>


        <br><br><br><br>
        <h1>Cadastro do produto</h1>
        
        <div>
            <form action="AlterarProduto.php" method="POST">
                <input type="hidden" name="IdProduto" value="<?=$IdProduto?>">
                <div id="ctr1"><input type="text" placeholder="Nome do Produto..." name="NomeProduto" value="<?=Dados['Nomeproduto']?>"><br>
                <textarea name="DescricaoProduto" value="<?=Dados['DescricaoProduto']?>"></textarea><br></div>
                <div id="ctr1"><select name="Categoria"><br>
                <option>Escolha uma Categoria</option>
                <?php
                    while($Dados = mysqli_fetch_assoc($Lista)){    
                ?>      
                    <option value="<?=$Dados['IdCategoria']?>"><?=$Dados['DescricaoCategoria']?></option>
                <?php 
                    }
                ?>
                </select></div><br>
                <div id="ctr1"><input type="number" placeholder="Preço do Produto..." name="Preco" value="<?=$Dados['PrecoProduto']?>"><br></div>
                <button type="submit"> Atualizar </button>
            </form>
        </div> 
					<br><br><br><br><br><br><br><br><br><br><br>
    <div class="rodape">
        <div class="ti"><a href="../Visão/AdministradorIndex.php"><strong>Voltar</strong></a></div>
    </div>
    </body>
</html>