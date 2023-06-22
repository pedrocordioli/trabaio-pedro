<?php
include "../includes/conexao.php";
$id = $_GET["id_cliente"];
$nome = $_POST ["nome"];
$sql = "update db_nutricao set nome = '$nome' where id_cliente = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location: selecionar.php");
?>
