<?php
include "../includes/conexao.php";
$id = $_GET["id_cliente"];

$sql = "delete from db_nutricao where id_cliente = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location:selecionar.php");
?>