<?php
include("locadora.php");
$idFilme = $_POST["idFilme"];
$tituloFilme = $_POST["tituloFilme"];
$duracaoFilme = $_POST["duracaoFilme"];
$valorLocacao = $_POST["valorLocacao"];
$idCategoria = $_POST["idCategoria"];
$sql = "update tbfilmes set tituloFilme =
'$tituloFilme',duracaoFilme='$duracaoFilme',valorLocacao='$valorLocacao',
idCategoria=$idCategoria where idFilme = $idFilme";
mysqli_query($conexao,$sql) or die("Erro ao atualizar registro. " .
mysqli_error($conexao));
header('Location: lista_filmes2.php');
?>