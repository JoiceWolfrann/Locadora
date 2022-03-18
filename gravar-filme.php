<?php
include("locadora.php");
$tituloFilme = $_POST["tituloFilme"];
$duracaoFilme = $_POST["duracaoFilme"];
$valorLocacao = $_POST["valorLocacao"];
$idCategoria = $_POST["idCategoria"];

$sqlGravarFilme = mysqli_query($conexao,"insert into
tbFilmes(tituloFilme,duracaoFilme,valorLocacao,idCategoria)
values('$tituloFilme','$duracaoFilme','$valorLocacao','$idCategoria')") 
or die("Erro ao gravar registro. " . mysqli_error($conexao));
header('Location: lista_filmes2.php');
?>