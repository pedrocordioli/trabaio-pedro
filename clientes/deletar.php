<?php
include "../includes/conexao.php";
$id = $_GET["id_codigo"];

$sql = "delete from db_nutricao where id_codigo = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location:selecionar.php");
?>