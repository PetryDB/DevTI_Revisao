<?php
    include "biblioteca/conexao.php"; 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>--Locadora Diego--</title>
  </head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col-12 bg-primary"> Cabecalho </div>
		</div>
		<div class="row">
			<div class="col-4 bg-danger">
				<a class="btn btn-link" href="#">Home</a>
				<br>
				<a class="btn btn-link" href="?pagina=contato&nome=Diego_Petry">Contato</a>
			</div>
			<div class="col-8 "> 
				<?php
                    if(isset($_GET['pagina'])){
                        include $_GET['pagina'].".php";
                    } else {
                        include "home.php";
                    }
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 bg-warning text-center"> Rodape </div>
		</div>
		
	</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>