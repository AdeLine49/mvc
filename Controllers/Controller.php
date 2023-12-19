<?php
// imposer au dvp de ne pas instancier controller
abstract class Controller {
    
    protected function render (string $path, array $data = []) {
        extract($data); // evite de faire deux boucles de tableau, tableau dans un tableau, evite de boucler dans le 
        // tableau vierge
        
        ob_start();
                // on créer le buffer de sortie, ouvre un canal ou l'on va stocker ce que l'on veut
        
        // crée le chemin et inclut le ficher de la vue souhaitée        
        include dirname(__DIR__) . '/Views/' . $path . '.php';
        
        // on vide le buffer dans la variable $content
        $content = ob_get_clean();

        // on fabrique le template
        include dirname(__DIR__) . '/Views/base.php';
    }

}