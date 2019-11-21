<?php  
	require('conexao.php');
	$id= isset($_GET['id'])?$_GET['id']:0;


	$sql="select nome,profissao,sexo from cliente where id=$id";
	$result =$con->query($sql);
	$row= $result->fetch_array();
	$nome=$row['nome'];
	$profissao=$row['profissao'];
	$sexo=$row['sexo'];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Editar</title>
  </head>
  <body>
    
    <div class="container">
    	<h1>Editar</h1>
	<form  action="update_back.php" method="post">
	  <div class="form-group">
	    <label >Nome</label>
	    <input type="text" class="form-control"  name="nome" value="<?= $nome?>">
	   
	  <div class="form-group">
	    <label>profissão</label>
	    <input type="text" class="form-control" name="profissao" value="<?= $profissao ?>" >
	  </div>
		 
	  	<label class="form-group">sexo:</label>
	  	<?php  

	  		if($sexo == 'masculino'){
	  			echo'

	  				  <div class="form-check">
	  	
						  <input class="form-check-input" type="radio" name="sexo"  value="masculino" checked>
						  <label >
						    Maculino
						  </label>
					  </div>

					  <div class="form-check">
						  <input class="form-check-input" type="radio" name="sexo"  value="feminino">
						  <label>
						    Feminino
						  </label>
						</div>


	  			';
	  		}else{

	  				echo'

	  				  <div class="form-check">
	  	
						  <input class="form-check-input" type="radio" name="sexo"  value="masculino" >
						  <label >
						    Maculino
						  </label>
					  </div>

					  <div class="form-check">
						  <input class="form-check-input" type="radio" name="sexo"  value="feminino" checked>
						  <label>
						    Feminino
						  </label>
						</div>


	  			';
	  		}


	  	 ?>
	  <input type="hidden" name="id_update" value="<?= $id ?>">
	  <button type="submit" class="btn btn-primary">Atualizar</button>
	</form>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>