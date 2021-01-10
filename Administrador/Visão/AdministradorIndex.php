<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../Css/estilo1.css">
		<link rel="stylesheet" href="../../Css/centrarl.css">
        <meta charset="UTF-8">
        <title>Administrador - Jhenny´s Shoes</title>

    <div id="pai">
        <h1 id="salmon">Jhenny´s Shoes</h1>
        <div id="cab1"><div id="cab">
            <div id="c1"> <a href="../../index.php">Página Inicial</a><br></div>
            <div id="c2"> <a href="../Produto/CadastroProduto.php">Cadastrar Produto</a><br><br></div>
			<div id="c3"> <a href="../Categoria/CadastroCategoria.php">Cadastrar Categoria</a><br></div>
            <div id="c4"> <a href="../../carinho.html">Carrinho de compras</a><br></div>
            </div></div>
        </div>
		
	</head>
	<body>
        <br>
		<div id="ctr">
            <table border=1>
				<thead>
				<tr>
					<th><h6>NOME</h6></th>
					<th><h6>PREÇO</h6></th>
					<th><h6>DETALHAR</h6></th>
					<th><h6>UPDATE</h6></th>
					<th><h6>DELETAR</h6></th>
				</tr>
				</thead>
			
				<?php 
				require "../../Banco/ConexaoBanco.php";
				$BancoSql = "SELECT * FROM Produto";
				$Lista = mysqli_query($Conexao_Banco, $BancoSql);
				$Dados = array(); 
				if(empty($Lista)){
					echo "Nenhum Produto Cadastrado";
				}else{
					while ($Dados = mysqli_fetch_assoc($Lista)){
				?>
     
                <tr>
                    <td><?=$Dados['Nomeproduto']?></td>
                    <td><?=$Dados['PrecoProduto']?></td>
                    <td><a href = "../Produto/DetalharProduto.php?IdProduto= <?=$Dados['IdProduto']?>">Detalhar</a></td>
                    <td><a href = "../Produto/FormularioAlterarProduto.php?IdProduto= <?=$Dados['IdProduto']?>">Update</a></td>
                    <td><a href = "../Produto/DeletarProduto.php?IdProduto= <?=$Dados['IdProduto']?>">Deletar</a></td>
                    
                </tr>
                <?php }}?>
			</table>
		</div>
        <br>
		<div id="ctr">
        <table border = 1>
		<thead>
            <tr>
                <th><h6>NOME</h6></th>
                <th><h6>PREÇO</h6></th>
                <th><h6>DETALHAR</h6></th>
                <th><h6>UPDATE</h6></th>
                <th><h6>DELETAR</h6></th>
            </tr>
		</thead>
		
    <?php 
        require "../../Banco/ConexaoBanco.php";
        $BancoSql = "SELECT * FROM Cliente";
        $Lista = mysqli_query($Conexao_Banco, $BancoSql);
        $Dados = array(); 
        if(empty($Lista)){
            echo "Nenhum Cliente Cadastrado";
        }else{
            while ($Dados = mysqli_fetch_assoc($Lista)){
    ?>
     
                <tr>
                    <td><?=$Dados['Nome']?></td>
                    <td><?=$Dados['Email']?></td>
                    <td><a href = "../Cliente/DetalharCliente.php?IdCliente= <?=$Dados['IdCliente']?>">Detalhar</a></td>
                    <td><a href = "../../Cliente/FormularioAtualizarCliente.php?IdCliente= <?=$Dados['IdCliente']?>">Update</a></td>
                    <td><a href = "../Cliente/DeletarCliente.php?IdCliente= <?=$Dados['IdCliente']?>">Deletar</a></td>
                    
                </tr>
                <?php }}?>
        </table>
		</div>
		<br>
	

        <br>
		<div id="ctr">
			<table border = 1>
			<thead>
				<tr>
					<th><h6>ID</h6></th>
					<th><h6>DESCRICAO</h6></th>
					<th><h6>DELETAR</h6></th>
				</tr>
			</thead>
				<?php 
					require "../../Banco/ConexaoBanco.php";
					$BancoSql = "SELECT * FROM Categoria";
					$Lista = mysqli_query($Conexao_Banco, $BancoSql);
					$Dados = array(); 
					if(empty($Lista)){
						echo "Nenhum Cliente Cadastrado";
					}else{
						while ($Dados = mysqli_fetch_assoc($Lista)){
				?>
					<tr>
						<td><?=$Dados['IdCategoria']?></td>
						<td><?=$Dados['DescricaoCategoria']?></td>
						<td><a href = "../Categoria/DeletarCategoria.php?IdCategoria= <?=$Dados['IdCategoria']?>">Deletar</a></td>
						
					</tr>
					<?php }}?>
			</table>
		</div>
			<br><br>
    </body>
    <div class="rodape">
        <div class="ti"><a href="../../Cliente/CadastroCliente.php"><strong>Cadastre-se</strong></a></div>
    </div>
</html>