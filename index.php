<?php

	// Le fichier INDEX.PHP fait office de routeur : il trouve quel controleur appeler et trouve la méthode de ce controleur qui doit être lancée

	require "autoload.php";
	define("CONSTANTE", 12);

	

	$pdo = new \PDO("mysql:host=localhost;dbname=portfolio",'root','',array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING, \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


	if( !empty($_GET) ){
		$methode = $_GET["methode"];
		$classeControleur = "Controleurs\\" . ucfirst($_GET["controleur"]) . "Controleur";
		$controleur = new $classeControleur;
		$id = !empty($_GET["id"]) ? $_GET["id"] : null;
		$controleur->$methode($id);
	}
	else{
		include "Vues/layout.php";
	}


