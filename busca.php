
<!DOCTYPE HTML>
<html land="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Area Administrativa</title>
  <meta name="description" content="PHP OO" />
  <meta name="robots" content="index, follow" />
   <meta name="author" content="Bruno Nascimento"/>
   <link rel="stylesheet" href="design/css/bootstrap.css" />
  <link rel="stylesheet" />
  <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->

</head>
<body>

	<div class="container">

				
		<header class="masthead">
			<h1 class="muted">Sistemas</h1>
			<nav class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<ul class="nav">
							<li class="active"><a href="logado.php">Início</a></li>
						</ul>
						<ul class="nav">
							<li class="active"><a href="cadastro_ocorrencia.php">Área de Cadastro</a></li>
						</ul>
						<ul class="nav">
							<li class="active"><a href="busca.php">Busca</a></li>
						</ul>
						<ul class="nav">
							<li class="active"><a href="login.php?token=">Sair</a></li>				
						</ul>
					</div>

				</div>
			</nav>
		</header>		

	</div>

	<?php
		

		if(isset($_POST['buscar'])):

			$tipo_ocorrencia = $_POST['tipo_ocorrencia']; //nome
			$data_ocorrencia = $_POST['data_ocorrencia']; //email
			$descricao = $_POST['descricao'];
			$local = $_POST['local'];
			
			

			$teste->settipo_ocorrencia($tipo_ocorrencia);
			$teste->setdata_ocorrencia($data_ocorrencia);
			$teste->setlocal($local);
			
			# Insert
			if($teste->select()){
				echo "Inserido com sucesso!";
			}

		endif;
		?>

 	<center>
		<form method="post" action="">
			<br><div class="input-prepend">
				<span class="add-on"><i class="">Hora da ocorrencia:</i></span>
				<input type="text" name="hora_ocorrencia" placeholder="" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="">Data da ocorrencia:</i></span>
				<input type="text" name="data_ocorrencia" placeholder="" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="">Descrição:</i></span>
				<input type="text" name="descricao" placeholder="" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="">Local:</i></span>
				<input type="text" name="local" placeholder="" />
			</div>
			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Buscar dados">					
		</form>
		</center>


		<table class="table table-hover">
		<thead>
				<tr>
					<th>#</th>
					<th>Tipo da ocorrência:</th>
					<th>Data da ocorrência:</th>
					<th>Descrição:</th>
					<th>Local:</th>
				</tr>
			</thead>
			<?php foreach($teste->findAll() as $key => $value): ?>
			<tbody>
				<tr>
					<td><?php echo $value->id_ocorrencia; ?></td>
					<td><?php echo $value->tipo_ocorrencia; ?></td>
					<td><?php echo $value->data_ocorrencia; ?></td>
					<td><?php echo $value->descricao; ?></td>
					<td><?php echo $value->local; ?></td>
					

				</tr>
			</tbody>


			<?php endforeach; ?>
			</table>

<script src="design/js/jQuery.js"></script>
<script src="design/js/bootstrap.js"></script>
</body>
</html>