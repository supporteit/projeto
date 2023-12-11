<?php
 $sql = "SELECT * FROM cadastro WHERE Sexo = '$pesquisa'";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $nome = $registro['NomeCliente'];
   $sobrenome = $registro['SobrenomeCliente'];
   $sexo = $registro['Sexo'];
   echo "<tr>";
   echo "<td>".$nome."</td>";
   echo "<td>".$sobrenome."</td>";
   echo "<td>".$sexo."</td>";
   echo "</tr>";
 }
 mysqli_close($strcon);
 echo "</table>";
?>