<?php 
    $conexao = mysqli_connect("localhost:3307", "root", "", "agenda");
    $dados = mysqli_query($conexao, "SELECT * FROM contato");

    while($usuario = mysqli_fetch_array($dados)){
        $contatos[] = $usuario["nome"];
    }
?>