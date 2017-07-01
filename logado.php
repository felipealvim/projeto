<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
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

	</div>

<body>

<div class="container">

<header>
   <h1>Noticias</h1>
</header>
  
<nav>
 <ul>
    <li><a href="http://www.em.com.br/app/noticia/gerais/2017/06/30/interna_gerais,880288/assaltos-evidenciam-a-vulnerabilidade-dos-parceiros-do-uber.shtml">Assaltos evidenciam...</a></li>
    <br>
    <li><a href="http://g1.globo.com/rio-de-janeiro/noticia/ex-jogador-roger-flores-sofre-tentativa-de-assalto-no-leblon-e-leva-coronhada.ghtml">Assalto no Leblon..</a></li>
    </ul>
</nav>



<article>
<br><br><br>
  <h1>Resumo do Sistema</h1>
  <br>
  <p>Informar índice de roubo em localidades. Registrar os locais que se devem ou não visitar, informar melhores formas de conduções.</p>
  <p>Com o aumento da facilidade de locomoção e no descolamento de pessoas a locais distantes e turistas que visitam o estado, que de acordo com o site da Secretaria de Turismo do Estado do Rio de Janeiro teve um aumento de aproximadamente 1.149,335 de pessoas em 2014 aos pontos turísticos da cidade comparados ao ano de 2013.</p>
  </article>



</div>

</body>
<script src="design/js/jQuery.js"></script>
<script src="design/js/bootstrap.js"></script>
</body>

</html>

