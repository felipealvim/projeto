<?php session_start();

if (!isset($_SESSION['teste'])) {
  header('location:login.php');
}else{


	require_once 'logado.php';
	

}
?>