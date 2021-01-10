<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="../../Css/estilo1.css">
		<link rel="stylesheet" href="../../Css/centrarl.css">
        <meta charset="UTF-8">
        <title>Jhenny's Shoes</title>
         <div id="pai"><h1 id="salmon">Jhenny´s Shoes</h1>
        <div id="cab1"><div id="cab">
            <div id="c1"> <a href="../../descrição.html">Descrição do site</a><br></div>
            <div id="c2"> <a href="../../Cliente/CadastroCliente.php">Cadastre-se</a><br></div>
            <div id="c3"> <a href="../../login.html">Login</a><br></div>
            <div id="c4"> <a href="../../carinho.html">Carrinho de compras</a><br></div>
            <div id="c5"> <a href="../../Administrador/Visão/AdministradorIndex.php">Administrador</a><br></div>
            </div></div>
        </div>
    
    </head>
    <body>
         <br><br>
	<h1>Descrição do cliente</h1>
	<div id="ctr">
    <table border = 1>
            <tr>
                <th><h6>ID</h6></th>
                <th><h6>NOME</h6></th>
                <th><h6>SOBRENOME</h6></th>
                <th><h6>TELEFONE</h6></th>
                <th><h6>EMAIL</h6></th>
                <th><h6>SENHA</h6></th>
                <th><h6>ENDEREÇO</h6></th>
            </tr>
    <?php    
        require "../../Banco/ConexaoBanco.php";
        $IdCliente = $_GET['IdCliente'];
        $Comando = "SELECT * FROM Cliente WHERE IdCliente = $IdCliente";
        $Result = mysqli_query($Conexao_Banco, $Comando);
        $Dados = array(); 
        while ($Dados = mysqli_fetch_assoc($Result)){
    ?>
     
                <tr>
                    <td><h6><?=$Dados['IdCliente']?></h6></td>
                    <td><h6><?=$Dados['Nome']?></h6></td>
                    <td><h6><?=$Dados['Sobrenome']?></h6></td>
                    <td><h6><?=$Dados['Telefone']?></h6></td>
                    <td><h6><?=$Dados['Email']?></h6></td>
                    <td><h6><?=$Dados['Senha']?></td>
                    <td><h6><a href="../../Cliente/EnderecoCliente.php?Id= <?=$Dados['IdCliente']?>">Endereço</a></h6></td>
                </tr>
                <?php }?>
        </table>
		</div>
	<br><br><br><br><br><br><br><br><br><br><br>
    <div class="rodape">
        <div class="ti"><a href="../Visão/AdministradorIndex.php"><strong>Voltar</strong></a></div>
    </div>
    </body>
</html>