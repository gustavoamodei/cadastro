<?php
	
	require('conexao.php');
	$nome = $_POST['nome'];
	$profissao = $_POST['profissao'];
	$sexo= $_POST['sexo'];
	$id= $_POST['id_update'];

	$sql="update cliente set nome=?,profissao=?,sexo=? where id=?";
	$stmt=$con->prepare($sql);
	$stmt->bind_param("sssi",$nome,$profissao,$sexo,$id);
	$stmt->execute();
	header("Location: listar.php");

?>