<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>cadastro</title>
  </head>
  <body>
    
    <div class="container">
    	<h1>cadastro</h1>
	<form  action="cad_back.php" method="post">
	  <div class="form-group">
	    <label >Nome</label>
	    <input type="text" class="form-control"  name="nome">
	   
	  <div class="form-group">
	    <label>profissão</label>
	    <input type="text" class="form-control" name="profissao" >
	  </div>
		 
	  	<label class="form-group">sexo:</label>
	  	
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
	  <button type="submit" class="btn btn-primary">Cadastrar</button>
	</form>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>