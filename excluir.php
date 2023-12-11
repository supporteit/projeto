<?php
 $strcon = mysqli_connect('localhost','fabio','123','banco_teste') or die('Erro ao conectar ao banco de dados requisitado');
$nome = $_POST['nome'];
$sql = "DELETE FROM Cadastro WHERE NomeCliente='$nome'"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar excluir registro");

// Verificar se algum registro foi excluído ou não
if (mysqli_affected_rows($strcon)) {  // se houver linhas afetadas, o dado foi excluído
    echo "Cliente excluído";
}
else {
    mysqli_close($strcon);
    die("Erro ao tentar excluir registro");
}
// Fechar a conexão
mysqli_close($strcon);
// Redirecionar para página inicial após 5 segundos:
header("refresh:5;url=index.html");
?>