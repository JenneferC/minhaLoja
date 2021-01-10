<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../Css/estilo1.css">
        <link rel="stylesheet" href="../Css/index1.css">
		<link rel="stylesheet" href="../Css/centro1.css">
        <meta charset="UTF-8">
        <title>Jhenny's Shoes</title>
    <br><br><br>
   
    </head>
    <body>
    <div id="pai">
        <h1 id="salmon">Jhenny´s Shoes</h1>
        <div id="cab1"><div id="cab">
            <div id="c1"> <a href="../index.php">Página Inicial</a><br></div>
            <div id="c2"> <a href="../Cliente/CadastroCliente.php">Cadastre-se</a><br></div>
            <div id="c3"> <a href="../login.html">Login</a><br></div>
            <div id="c4"> <a href="../carinho.html">Carrinho de compras</a><br></div>
            <div id="c5"> <a href="../Administrador/Visão/AdministradorIndex.php">Administrador</a><br></div>
            </div></div>
        </div>

        <?php
            $IdCliente= $_GET['IdCliente'];
        require "../Banco/ConexaoBanco.php";
        $Comando = "SELECT * FROM Cliente WHERE IdCliente = $IdCliente";
        $Result = mysqli_query($Conexao_Banco, $Comando);
        $Dados = array();
        $Dados = mysqli_fetch_assoc($Result);
?>
		<h1>Cadastre-se</h1>
			<div id="ctr">
            <form  action="AtualizarCliente.php" method="POST"><br>
            <input type="hidden" value="<?=$IdCliente?>" name="Id">
            <input type="text" placeholder="Nome..." name="Nome" value="<?=$Dados['Nome']?>"><br>
            <input type="text" placeholder="Sobrenome..." name="Sobrenome" value="<?=$Dados['Sobrenome']?>"><br>
            <input type="number" placeholder="Telefone..." name="Telefone" value="<?=$Dados['Telefone']?>"><br>
            <input type="email" placeholder="Email..." name="Email" value="<?=$Dados['Email']?>"><br>
            <input type="password" placeholder="Senha..." name="Senha"><br>
            <input type="password" placeholder="Confirme a Senha..." name="RepeticaoSenha"><br>
			</div>
          <button type="submit">Cadastre-se</button>
          </form>
        
        <br><br><br><br><br><br><br><br><br>
        
         <div class="rodape">
        <div class="ti"> <a href="../Administrador/Visão/AdministradorIndex.php"><strong>Adiministrador</strong></a></div>
    </div>
    </body>

