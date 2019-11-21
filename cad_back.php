<?php  

require('conexao.php');
$nome = $_POST['nome'];
$prof = $_POST['profissao'];
$sexo = $_POST['sexo'];
	$sql="insert into cliente(nome,profissao,sexo)values(?,?,?)";
	$stmt=$con->prepare($sql);
	$stmt->bind_param("sss",$nome,$prof,$sexo);
	$stmt->execute();
header("Location: listar.php");

?>