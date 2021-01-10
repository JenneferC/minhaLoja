<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Css/estilo1.css">
		<link rel="stylesheet" href="../../Css/centrarl.css">
        <meta charset="UTF-8">
        <title>Jhenny's Shoes</title>
    </head>
    <body>
    <div id="pai">
        <h1 id="salmon">Jhenny´s Shoes</h1>
        <div id="cab1"><div id="cab">
            <div id="c1"> <a href="../mapaSite.html">Inicio</a><br></div>
            <div id="c2"> <a href="../Cliente/CadastroCliente.php">Cadastre-se</a><br></div>
            <div id="c3"> <a href="../login.html">Login</a><br></div>
            <div id="c4"> <a href="../carinho.html">Carrinho de compras</a><br></div>
            <div id="c5"> <a href="../Administrador/Visão/AdministradorIndex.php">Administrador</a><br></div>
            </div></div>
        </div>

        <?php
            $IdCliente = $_GET['Id'];
        ?>
        <br>
        <br>
		<h1>Cadastre-se</h1>
            <form  action="InserirEndereco.php" method="POST"><br>
            <input type="hidden" name="IdCliente" value="<?=$IdCliente?>"?>
            <input type="text" placeholder="Estado..." name="Estado"><br>
            <input type="text" placeholder="Cidade..." name="Cidade"><br>
            <input type="text" placeholder="Bairro..." name="Bairro"><br>
            <input type="text" placeholder="Rua..." name="Rua"><br>
            <input type="number" placeholder="Numero..." name="Numero"><br>
			</div><br>
          <button type="submit">Cadastre-se</button>
          </form>
        
        
        <br><br><br><br><br><br><br><br><br><br><br>
    <div class="rodape">
        <div class="ti"><a href="../Administrador/Visão/AdministradorIndex.php"><strong>VOLTAR</strong></a></div>
    </div>
</body>    
</html>