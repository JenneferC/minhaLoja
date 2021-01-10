<?php
    $Conexao_Banco = mysqli_connect("localhost", "root", "", "JS");
    if(!$Conexao_Banco){
        echo "Deu erro ao se conectar ao banco";
    }
?>