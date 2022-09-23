<?php

require("./backend/database/database.php");

$id = $_GET['del'];
$pdo = conectaBD();
$pdo ->exec("DELETE FROM carro WHERE id=$id");

header("Location:/trabalho_php-master/?p=carro");

?>