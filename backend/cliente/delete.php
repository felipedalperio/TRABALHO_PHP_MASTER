<?php

require("./backend/database/database.php");

$id = $_GET['del'];
$pdo = conectaBD();
$pdo ->exec("DELETE FROM cliente WHERE id=$id");

header("Location:/trabalho_php-master/?p=cliente");

?>