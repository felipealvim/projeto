<?php
	
		require_once 'controller/Ocorrencia.php';
	
?>
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

		<?php
		$ocorrencia = new Ocorrencias();

		if(isset($_POST['cadastrar'])):

			$tipo_ocorrencia = $_POST['tipo_ocorrencia']; //nome
			$data_ocorrencia = $_POST['data_ocorrencia']; //email
			$descricao = $_POST['descricao'];
			$local = $_POST['local'];
			
			

			$ocorrencia->settipo_ocorrencia($tipo_ocorrencia);
			$ocorrencia->setdata_ocorrencia($data_ocorrencia);
			$ocorrencia->setdescricao($descricao);
			$ocorrencia->setlocal($local);
			
			# Insert
			if($ocorrencia->insert()){
				echo "Inserido com sucesso!";
			}

		endif;
		
		?>
		
		

		<?php 
		if(isset($_POST['atualizar'])):

			$id_ocorrencia = $_POST['id_ocorrencia'];
			$tipo_ocorrencia = $_POST['tipo_ocorrencia'];
			$data_ocorrencia = $_POST['data_ocorrencia'];
			$descricao = $_POST['descricao'];
			$local = $_POST['local'];

			$ocorrencia->setTipo_ocorrencia($tipo_ocorrencia);
			$ocorrencia->setData_ocorrencia($data_ocorrencia);
			$ocorrencia->setDescricao($descricao);
			$ocorrencia->setLocal($local);

			if($ocorrencia->update($id_ocorrencia)){
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id_ocorrencia = (int)$_GET['id_ocorrencia'];
			if($ocorrencia->delete($id_ocorrencia)){
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id_ocorrencia = (int)$_GET['id_ocorrencia'];
			$resultado = $ocorrencia->find($id_ocorrencia);
		?>


		<center>
		<form method="post" action="">

			<div class="input-prepend">
				<span class="add-on"><i class="">Tipo da ocorrência:</i></span>
				<input type="text" name="tipo_ocorrencia" value="<?php echo $resultado->tipo_ocorrencia; ?>" placeholder="" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="">Data da ocorrência:</i></span>
				<input type="text" name="data_ocorrencia" value="<?php echo $resultado->data_ocorrencia; ?>" placeholder="" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="">Descrição:</i></span>
				<input type="text" name="descricao" value="<?php echo $resultado->descricao; ?>" placeholder="" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="">Local:</i></span>
				<input type="text" name="local" value="<?php echo $resultado->local; ?>" placeholder="" />
			</div>
			<input type="hidden" name="id_ocorrencia" value="<?php echo $resultado->id_ocorrencia; ?>">
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
		</form>

		</center>
		<?php }else{ ?>

		<center>
		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on" ><i class="">Tipo da ocorrência: </i> </span>
				<input type="text" name="tipo_ocorrencia" placeholder="" />
			</div>

			<div class="input-prepend">
				<span class="add-on"><i class="">Data da ocorrência:</i></span>
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
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>
		</center>
		<?php } ?>

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
			
			<?php foreach($ocorrencia->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id_ocorrencia; ?></td>
					<td><?php echo $value->tipo_ocorrencia; ?></td>
					<td><?php echo $value->data_ocorrencia; ?></td>
					<td><?php echo $value->descricao; ?></td>
					<td><?php echo $value->local; ?></td>

					<td>
						<?php echo "<a href='cadastro_ocorrencia.php?acao=editar&id_ocorrencia=" . $value->id_ocorrencia . "'>Editar</a>"; ?>

						<?php 
						echo "<a  href='cadastro_ocorrencia.php?acao=deletar&id_ocorrencia=" . $value->id_ocorrencia . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
					</td>
				</tr>
			</tbody>

			<?php endforeach; ?>

		</table>

	</div>

<script src="design/js/jQuery.js"></script>
<script src="design/js/bootstrap.js"></script>

</body>
</html>