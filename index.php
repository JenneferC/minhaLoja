 <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Css/estilo1.css">
        <link rel="stylesheet" href="Css/index1.css">
        <meta charset="UTF-8">
        <title>Jhenny's Shoes</title>
    </head>
    <body>
    <div id="pai">
        <h1 id="salmon">Jhenny´s Shoes</h1>
        <div id="cab1"><div id="cab">
            <div id="c1"> <a href="mapaSite.html">Inicio</a><br></div>
            <div id="c2"> <a href="Cliente/CadastroCliente.php">Cadastre-se</a><br></div>
            <div id="c3"> <a href="login.html">Login</a><br></div>
            <div id="c4"> <a href="carinho.html">Carrinho de compras</a><br></div>
            <div id="c5"> <a href="Administrador/Visão/AdministradorIndex.php">Administrador</a><br></div>
            </div></div>
        </div>
		<br><br>
		
        <div class="linha">
        <?php 
        require "Banco/ConexaoBanco.php";
        $BancoSql = "SELECT * FROM Produto";
        $Lista = mysqli_query($Conexao_Banco, $BancoSql);
        $Dados = array(); 
        if(empty($Lista)){
            echo "Nenhum Produto Cadastrado";
        }else{
            while ($Dados = mysqli_fetch_assoc($Lista)){
    ?>
        
            <div class="produto">
				<div id="prods">
				<img class="s" src="<?=$Dados['ImagemProduto']?>" alt="<?= $Dados['Nomeproduto']?>">
                <p><?=$Dados['Nomeproduto']?></p>
                <p>R$ <?=$Dados['PrecoProduto']?>,99</p>
				</div>
            </div>

    <?php
            }}
    ?>
    </div>
            <div class="rodape">
				<div class="ti"> <a href="mapaSite.html"><strong>VOLTAR</strong></a></div>
			</div>
    </body>
</html>