<?php

// Every Controller MUST extends this class

namespace Oframework\Controllers;

abstract class CoreController {
    /**
     * Méthode s'occupant d'afficher le rendu HTML à paratir de la template demandée
     * 
     * @param $viewName string Le nom de la template/views
     * @param $viewVars array les données à transmettre
     */
    protected function show($viewName, $viewData = array()) {

        global $app; // moche, mais propre ce serait trop compliqué
        // var_dump($viewVars);exit;

        // Si on a besoin de la variable $router, permettant de générer des URLs
        $router = $app->getAltoRouter();

        // Je crée une variable contenant l'URL absolue jusqu'au dossier "public"
        // La clé "BASE_URI" est générée par le fichier .htaccess créant l'entonnoir
        if (!empty($_SERVER['BASE_URI'])) {
            $absoluteUrl = $_SERVER['BASE_URI'];
        }
        else {
            $absoluteUrl = '/';
        }
        // Cette variable $absoluteUrl est désormais disponible dans toutes mes templates/views

        extract($viewData);

        include(__DIR__.'/../views/layout/header.tpl.php');
        // TODO check if file exists before inclusion
        include(__DIR__.'/../views/'.$viewName.'.tpl.php');
        include(__DIR__.'/../views/layout/footer.tpl.php');
    }

    /**
     * Méthdoe permettant de rediriger vers une route mappée avec AltoRouter
     */
    public function redirectToRoute($routeName, $routeDynamicParts = []) {
        global $router;

        // On génère l'URL vers laquelle rediriger
        $url = $router->generate($routeName, $routeDynamicParts);

        // Redirection
        header('Location: '.$url);
        exit;
    }
}