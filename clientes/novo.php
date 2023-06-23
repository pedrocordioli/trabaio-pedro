<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1>Novo cliente</h1>
<p>Vamos cadastrar um cliente novo no sistema</p>
<form action="inserir.php" method="post">
    Nome: <input name="nome" required maxlength="50"><br>
    Cidade: <input name="cidade" required maxlength="50"><br>
    Estado: <input name="estado" required maxlength="50"><br>
    Peso: <input name="peso" required maxlength="50"><br>
    Altura: <input name="altura" required maxlength="50"><br>
    Data de nascimento: <input name="data_nascimento" required maxlength="50"><br>
    Data da ultima consulta: <input name="data_ultima_consulta" required maxlength="50"><br>
    <button type="submit">Salvar</button>
</form>
<?php
include "../includes/rodape.php";
?>