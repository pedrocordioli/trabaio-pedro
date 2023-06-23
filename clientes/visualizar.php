<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$id_cliente = $_GET["id"];

$foto = "";
$nome = "";
$cidade = "";
$estado = "";
$peso = "";
$altura = "";
$data_nascimento = "";
$data_ultima_consulta = "";

$sql = "select * from db_nutricao where id = $id_cliente";
$todos_os_clientes = mysqli_query($conexao, $sql);
while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
    $foto = $um_cliente["foto"];
    $nome = $um_cliente["nome"];
    $cidade = $um_cliente["cidade"];
    $estado = $um_cliente["estado"];
    $peso = $um_cliente["peso"];
    $altura = $um_cliente["altura"];
    $data_nascimento = $um_cliente["data_nascimento"];
    $data_ultima_consulta = $um_cliente["data_ultima_consulta"];
endwhile;
?>
<h1>Ficha do Cliente</h1>
<img src="<?php echo $foto; ?> " width="100px"><br>
Nome: <?php echo $nome; ?><br>
Cidade: <?php echo $cidade; ?> <br>
Estado: <?php echo $estado; ?> <br>
Peso: <?php echo $peso; ?> <br>
Altura: <?php echo $altura; ?> <br>
Data de nascimento: <?php echo $data_nascimento; ?> <br>
Data da ultima consulta: <?php echo $data_ultima_consulta; ?> <br>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>
