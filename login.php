<?php session_start();
	try {
		$error = '';
		$enviar='';
		$enviado='';

		$conexao = new PDO('mysql:host=localhost;dbname=sistema', 'root','');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nome = $_POST['nome'];
			$senha = $_POST['senha'];
     $sql = $conexao->prepare('SELECT * FROM usuario WHERE nome = :nome AND 
     	                        senha = :senha');
     $sql->execute(array(':nome'=>$nome,
     	                  ':senha'=>$senha));

     $resultado = $sql->fetch();
        if ($resultado != false) {
	      $_SESSION['nome'] = $nome;
	      $enviar .=  '<center> Bem-Vindo <br>'. ucwords($resultado['nome']). '</center> <br>';
	      $enviar .= '<meta http-equiv="refresh" content="4;url=logado.php">';
	      $enviado .= '<center><i class="fa fa-cog fa-spin fa-3x fa-fw"></i><br>
	                  <span class="">Acessando o Sistema...</span></center><br>';
	   
   } else {
   $error .= '<li class="alert alert-danger"> Os dados estão incorretos </li>';
   
}

		}
	} catch (Exception $e) {
		echo "Error  de conexao da base de dados.";
	}


	






	require 'login.view.php';
 ?>