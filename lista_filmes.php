<?php
  include_once("locadora.php");
 
  echo "<h1> Selecionando registros usando FOR </h1>";

  $sqlRegistros = mysqli_query($conexao,"select * from tbfilmes");
  
  $num_linhas = mysqli_num_rows($sqlRegistros); // Retorna para a variável o número total de linhas contendo registros.
    for($i=0;$i<$num_linhas;$i++){
        $dados = mysqli_fetch_array($sqlRegistros);
        $idFilme = $dados["idFilme"];
        $tituloFilme = $dados["tituloFilme"];
        $duracaoFilme = $dados["duracaoFilme"];
        $valorLocacao = $dados["valorLocacao"];
        echo "Código: $idFilme | Titulo: $tituloFilme | Duração: $duracaoFilme |Valor: $valorLocacao <br>";
    }
 ?>
