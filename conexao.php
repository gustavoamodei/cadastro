<?php

	$host="localhost";
	$user="root";
	$password="";
	$banco="cadastro";
	$con = new mysqli($host,$user,$password,$banco);

	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();	
	}
 
	mysqli_query($con,"SET NAMES 'utf8'");
	mysqli_query($con,'SET character_set_connection=utf8');
	mysqli_query($con,'SET character_set_client=utf8');
	mysqli_query($con,'SET character_set_results=utf8');

	?>