<?php
    require "../Banco/ConexaoBanco.php";

    $IdCliente = $_POST['Id'];
    $Nome = $_POST['Nome'];
    $Sobrenome = $_POST['Sobrenome'];
    $Telefone = $_POST['Telefone'];
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];
    $SenhaRepetir = $_POST['RepeticaoSenha'];

    if($Senha == $SenhaRepetir){
    $BancoSql = "UPDATE Cliente SET Nome ='$Nome', Sobrenome ='$Sobrenome',
    Telefone ='$Telefone', Email ='$Email', Senha = $Senha WHERE IdCliente = '$IdCliente'";
       $Update = mysqli_query($Conexao_Banco, $BancoSql);
           if($Update == true){
               echo "Atualização do Cliente feito com secesso!";
           }else{
               die("Atualização falhou!".mysqli_error($Conexao_Banco));
           }
        }
		
?>
