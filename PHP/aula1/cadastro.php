<?php 
    $nome = $_GET["nome"];
    $tutor = $_GET["tutor"];
    echo "Nome: $nome e Tutor: $tutor <br> </br>";

    $con = mysqli_connect("localhost:3307", "root", "", "veterinaria");

    $sql = "INSERT INTO animal
    (nome, tutor)
    VALUES ('$nome', '$tutor')";

    $resultado = mysqli_query($con, $sql);
?>