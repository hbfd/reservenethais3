<?php

	/*session_start();
	
	if (!isset($_SESSION['user'])) {
		//header("Location: home.php");
		header("Location: login.php");
	}   else if(isset($_SESSION['user'])!="") {
		//header("Location: login.php");
		header("Location: home.php");
	} 
	
	if (isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		//header("Location: index.html");
		header("Location: login.php");
		exit;
	} */
	
	
	session_start(); // Inicia a sessão
	session_destroy(); // Destrói a sessão limpando todos os valores salvos
	header("Location: login.php"); exit; // Redireciona o visitante

?>