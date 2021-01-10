<!DOCTYPE html>
<html>
<?php

    require "../Banco/ConexaoBanco.php";

    $Nome = $_POST['Nome'];
    $Sobrenome = $_POST['Sobrenome'];
    $Telefone = $_POST['Telefone'];
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];
    $SenhaRepetir = $_POST['RepeticaoSenha'];

    if($Senha == $SenhaRepetir){
        $BancoSql = "INSERT INTO Cliente (IdCliente,Nome,Sobrenome,Telefone,Email,Senha)
        VALUES (NULL,'$Nome','$Sobrenome','$Telefone','$Email','$Senha')";
        $Inserir = mysqli_query($Conexao_Banco, $BancoSql);
            if($Inserir == true){
                echo "Registro do Cliente feito com secesso!";
            }else{
                die("Registro falhou!".mysqli_error($Conexao_Banco));
            }
    }
	
?>
	<br>
    <a href="../Visão/AdministradorIndex.php">VOLTAR</a>
</html>
