<?php
@$username = trim($_POST["username"]);
@$senha = trim($_POST["password"]);

if(strlen($username) == 0 || strlen(($senha)==0)){
    header("Location: erro.php");
    exit(0);
} 

$con = new mysqli("localhost", "root","","vendas");
$sql = "SELECT * FROM clientes WHERE username='$username' AND password='$senha'";
$roda = $con->query($sql);

if($roda->num_rows == 1){
    setcookie("usuario", "$username");
    setcookie("senha", "$senha");
    header("Location: primeira.php");
    exit(0);

} else{
    header("Location: erro.php");
    exit(0);
}
?>