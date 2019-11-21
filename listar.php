<!doctype html>
<?php  
	require('conexao.php');

?>
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
    	<br>
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">nome</th>
      <th scope="col">profissao</th>
      <th scope="col">sexo</th>
      <th scope="col">ações</th>
    </tr>
  </thead>
<?php  


$sql="select * from cliente order by id desc";
$result =$con->query($sql);
	


while ( $row= $result->fetch_array()) {
	# code...
?>	
 

  <tbody>
    <tr>
      <th scope='row'><?=$row['id']?></th>
      <td><?=$row['nome']?></td>
      <td><?=$row['profissao']?></td>
      <td><?=$row['sexo']?></td>
      <td><a href="edit.php?id=<?=$row['id']?>" ><input type="submit" class="btn  btn-success " value="Editar">
      	<a href="excluir.php?id=<?=$row['id']?>" ><input type="submit" class="btn  btn-danger " value="Excluir">
      </td>

    </tr>
    
  </tbody>
<?php } ?>
	</table>



	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
