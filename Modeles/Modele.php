<?php

namespace Modeles;
class Modele{
	
	 
	public static $parametresConnexion = "mysql:host=localhost;dbname=portfolio";

	

	public static function tableLiee(){
		$classe = get_called_class(); 
		$classe = str_replace("Modeles\\","",$classe);
		return lcfirst($classe);
	}

	public static function nb(){
		global $pdo;
		$resultat = $pdo->query("SELECT COUNT(*) FROM " . self::tableLiee());
		$resultat = $resultat->fetch();
		return $resultat[0];
	}
}