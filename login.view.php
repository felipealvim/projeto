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
<center>

<div class="container">
<header class="masthead">
         <nav class="navbar">
        <div class="navbar-inner">
          <div class="container">
       <h1>Sistema&nbsp;&nbsp;&nbsp;</h1>
    </div>
    </div>
    </nav>
    <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <hr>
    <div class="form-group">
     <i class="fa fa-user"></i> <label for="nome"><b> Nome do Usuario</b></label>      
  <input type="text" name="nome" class="form-control" placeholder="Nome Usuario ">
    </div>
    
     <div class="form-group">
     <i class="fa fa-unlock-alt"></i> <label for="senha"><b> Senha</b></label>      
    <input type="password" name="senha" class="form-control" placeholder="Senha">
    </div>
  <br>
    <input type="submit" name="Logar" class="btn btn-primary" value="Logar">  
    <br><br>
    <?php echo "<a href='cadastrar.php?=" .  "'>Criar conta</a>"; ?>
    </div>
    <br>
</center>


      <?php  if(!isset($_SESSION['nome'])){

                 }?> 
             <?php if (!empty($enviar)): ?>
                 <div class="enviar">
                     <?php echo $enviar;  ?>
                 </div>
              <?php echo $enviado; ?> 
            <?php endif; ?>
            <br>
            <?php if(!empty($error)): ?>
              <br>
                <div class="error">                
                     <?php echo $error ?>
               </div>
            <?php endif; ?>
    </form>
    </div>
  </div>
</div>

<script src="design/js/jQuery.js"></script>
<script src="design/js/bootstrap.js"></script>

</body>
</html>