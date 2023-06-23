<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";
?>

<h1>Módulo de clientes</h1>
<p>
<button type="button" class="btn btn-warning"><a href="novo.php">Adicionar cliente</a></button>
</p>
<h2>Listagem de clientes</h2>
<table border="1">
    <tr>
        <td>código</td>
        <td>nome</td>
        <td>cidade</td>
        <td>estado</td>
        <td>peso</td>
        <td>altura</td>
        <td>data de nascimento</td>
        <td>data da ultima consulta</td>

    </tr>

    <?php
    $sql = "select * from t_cliente";
    $todos_os_clientes = mysqli_query($conexao, $sql);
    while($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
    ?>
    <tr>
        <td><?php echo $um_cliente['id_codigo'];?></td>
        <td><?php echo $um_cliente['nome'];?></td>
        <td><?php echo $um_cliente['cidade'];?></td>
        <td><?php echo $um_cliente['estado'];?></td>
        <td><?php echo $um_cliente['peso'];?></td>
        <td><?php echo $um_cliente['altura'];?></td>
        <td><?php echo $um_cliente['data_nascimento'];?></td>
        <td><?php echo $um_cliente['data_ultima_consulta'];?></td>
        <td>
            <a href="visualizar.php?id_cliente=<?php echo $um_pet ["id_cliente"];?>" title="Ver completo">Visualizar</a>
            <a href="editar.php?id_cliente=<?php echo $um_pet ["id_cliente"];?>" title="Ver completo">Editar</a>
            <a href="deletar.php?id_cliente=<?php echo $um_pet['id_cliente'];?>">Excluir</a>
        </td>
    </tr>
    <?php
    endwhile;
    ?>
</table>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>