<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<?php 
include "../includes/cabecalho.php";
?>
<center>
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
    <button class="btn btn-warning" type="submit">Salvar</button>
</form>
</center>
<?php
include "../includes/rodape.php";
?>