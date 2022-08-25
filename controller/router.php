<?php

$page = @$_GET['page'];

switch ($page) {

    case 'accueil':
        include_once('./controller/contenuController.php');
        $contenu = new ContenuController;
        $contenu->accueil();
        break;

    case 'contact':
        include_once('./view/contact.php');
        break;


    case 'nutriscore':
        include_once('./controller/contenuController.php');
        $contenu = new ContenuController;
        $contenu->nutriscore();
        break;

    default:
        include_once('./controller/contenuController.php');
        $contenu = new ContenuController;
        $contenu->accueil();
        break;
}
