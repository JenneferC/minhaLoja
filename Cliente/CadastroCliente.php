<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../Css/estilo1.css">
		<link rel="stylesheet" href="../Css/centro.css">
        <meta charset="UTF-8">
        <title>Jhenny's Shoes</title>
   </head>
   
    <body>
	
    <div id="pai">
        <h1 id="salmon">Jhenny´s Shoes</h1>
        <div id="cab1"><div id="cab">
            <div id="c1"> <a href="../descrição.html">Descrição do site</a><br></div>
            <div id="c2"> <a href="../Cliente/CadastroCliente.php">Cadastre-se</a><br></div>
            <div id="c3"> <a href="../login.html">Login</a><br></div>
            <div id="c4"> <a href="../carinho.html">Carrinho de compras</a><br></div>
            <div id="c5"> <a href="../Administrador/Visão/AdministradorIndex.php">Administrador</a><br></div>
            </div></div>
        </div>
		
        <br>
        <br>
			<h1>Cadastro do cliente</h1>
            <form  action="InserirCliente.php" method="POST"><br>
            <input type="text" placeholder="Nome..." name="Nome"><br>
            <input type="text" placeholder="Sobrenome..." name="Sobrenome"><br>
            <input type="number" placeholder="Telefone..." name="Telefone"><br>
            <input type="email" placeholder="Email..." name="Email"><br>
            <input type="password" placeholder="Senha..." name="Senha"><br>
            <input type="password" placeholder="Confirme a Senha..." name="RepeticaoSenha"><br>
			<br>
			<button type="submit">Cadastre-se</button>
			</form>
       
        <br><br><br><br><br><br><br><br><br><br>
        
         <div class="rodape">
        <div class="ti"> <a href="../Administrador/Visão/AdministradorIndex.php"><strong>Adiministrador</strong></a></div>
         </div>
    </body>

