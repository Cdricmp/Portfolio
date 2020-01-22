<?php
//AUTOLOAD.PHP

// je crée une fonction qui va charger la classe dont j'ai besoin
function chargerClasse($classe){
	require_once $classe . ".php";
}
// la fonction spl_autoload_register définie la fonction
// qui se lancer à chaque qu'une classe est requise.
// Dans le cas suivant, la fonction chargerClasse est appelée à chaque fois que je fais une instanciation (new)
spl_autoload_register("chargerClasse");
