<?php

$nome = $_COOKIE["usuario"];
$senha = $_COOKIE["senha"];

$con = new mysqli("localhost", "root", "", "vendas");
$sql = "SELECT * FROM clientes WHERE username='$nome' AND password='$senha'";
$roda = $con->query($sql);

if ($roda->num_rows != 1) {
    header("Location: erro.php");
    exit(0);
}



?>