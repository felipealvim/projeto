<?php
require 'controller/Cadastro.php';

if(isset($_POST['nome']) && empty($_POST['nome']) == false){
  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $senha = md5(addslashes($_POST['senha']));

  $sql = "INSERT INTO  (nome, senha, email) VALUES (:nome, :senha,:email)";
  
  header("Location: login.php");
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
      <h1 class="muted">
      <nav class="navbar">
        <div class="navbar-inner">
          <div class="container">
           <center> <h1>Cadastro&nbsp;&nbsp;&nbsp;</h1></center>
          </div>

        </div>
      </nav>
    </header>   

  </div>
<center>
<form method="POST">
  Nome:<br/>
  <input type="text" name="nome"/><br/><br/>
  E-mail:<br/>
  <input type="text" name="email"/><br/><br/>
  Senha:<br/>
  <input type="password" name="senha"/><br/><br/>

  <input type="submit" value="Cadastrar"/>
</form>
</center>
<script src="design/js/jQuery.js"></script>
<script src="design/js/bootstrap.js"></script>

</body>
</html>