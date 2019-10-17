
<?php
$mat = $_GET["mat"];

include_once 'conexao.php';

$sql = "delete from aluno where mat=$mat";

$msg = (mysqli_query($con, $sql)) ? "Excluido com sucesso" : "Erro ao Excluir";

header("location:msg.php?msg=".$msg);

?>