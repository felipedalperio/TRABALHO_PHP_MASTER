<?php 

require("../database/database.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

if (isset($nome)  && isset($email) && isset($telefone) && isset($sobrenome)){
    $array = array($nome, $sobrenome, $telefone,$email);
    $sql = conectaBD()->prepare("INSERT INTO cliente VALUES(null, ?, ?, ?, ?)");
    $sql -> execute(array_values($array));
}
//volta para a página do cliente 
header("Location:/trabalho_php-master/?p=cliente");

?>