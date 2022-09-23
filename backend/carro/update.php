<?php 

require("../database/database.php");

$marca = $_POST ['marca'];
$cor = $_POST ['cor'];
$id = $_POST['id'];
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];


conectaBD()->exec('UPDATE carro SET marca="'.$marca.'",
        cor="'.$cor.'",
        placa="'.$placa.'",
        modelo="'.$modelo.'" WHERE id="'.$id.'"');

//volta para a página do cliente 
header("Location:/trabalho_php-master/?p=carro");

?>