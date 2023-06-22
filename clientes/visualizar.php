<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$id_cliente = $_GET["id"];

$foto = "";
$nome = "";
$idade = "";
$sexo = "";
$especie = "";
$porte = "";
$cidade = "";
$estado = "";
$comportamento = "";
$sql = "select * from db_nutricao where id_cliente = $id_cliente";
$todos_os_clientes = mysqli_query($conexao, $sql);
while ($um_pet = mysqli_fetch_assoc($todos_os_pets)):
    $foto = $um_cliente["foto"];
    $nome = $um_cliente["nome"];
    $idade = $um_cliente["idade"];
    $sexo = $um_cliente["sexo"];
    $especie = $um_cliente["especie"];
    $porte = $um_cliente["porte"];
    $cidade = $um_cliente["cidade"];
    $estado = $um_cliente["estado"];
    $comportamento = $um_cliente["comportamento"];
endwhile;
?>
<h1>Ficha do pet</h1>
<img src="<?php echo $foto; ?> " width="100px"><br>
Nome: <?php echo $nome; ?><br>
Idade: <?php echo $idade; ?> <br>
Sexo: <?php echo $sexo; ?> <br>
Especie: <?php echo $especie; ?> <br>
Porte: <?php echo $porte; ?> <br>
Cidade: <?php echo $cidade; ?> <br>
Estado: <?php echo $estado; ?> <br>
Comportamento: <?php echo $comportamento; ?> <br>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>
