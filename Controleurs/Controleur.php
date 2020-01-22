<?php
namespace Controleurs;

class Controleur {
	public static function tableLiee(){
		$table = get_called_class();  // Récupère le nom de la classe d'où est appelée cette fonction get_called_class
		// par exemple $table = "Controleurs\Controleur"
		$table = str_replace("Controleurs\\", "", $table);
		// $table = "LivreControleur";
		$table = str_replace("Controleur", "", $table);
		// $table = "Livre";
		return $table;
	}

    public function render($vue, $parametres = []){
    	extract($parametres); // paramètre qui vont ètre envoyée a la vue.
    	ob_start();  // on commence à mettre les fichiers en mémoire tampon
    	$nomFichier = __DIR__ . "/../Vues/" .self::tableLiee() .  "/" . $vue . ".php";

    	include $nomFichier;
    	$htmlVue = ob_get_contents();  // je récupère tout ce qui est en mémoire tampon pour le mettre dans une variable 
    	ob_end_clean();					// j'arrête d'utiliser la mémoire tampon

    	require __DIR__ . "/../Vues/layout.php";
    }

}