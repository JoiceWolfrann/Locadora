 
<?php
  include_once("locadora.php");
  

  $sqlRegistros = mysqli_query($conexao,"select * from tbcategorias");
  
  $num_linhas = mysqli_num_rows($sqlRegistros); 
    for($i=0;$i<$num_linhas;$i++){
        $dados = mysqli_fetch_array($sqlRegistros);
        $idCategoria = $dados["idCategoria"];
        $nomeCategoria = $dados["nomeCategoria"]; 
        echo "<br>Codigo: $idCategoria | Categoria: $nomeCategoria <br>";
    }
 ?> 