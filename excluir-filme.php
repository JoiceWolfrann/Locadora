<?php
include("locadora.php");
$idFilme = $_GET["idFilme"];
$sqlDeleta = mysqli_query($conexao,"delete from tbFilmes where idFilme = $idFilme")
or die("Erro ao deletar arquivo. " . mysqli_error($conexao));
header('Location: lista_filmes2.php');
?>