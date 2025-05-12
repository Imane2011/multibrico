<?php
session_start();

// Les routes vont êtres gérer avec un switch
if(!empty($_GET['route'])){
    // Si route n'est pas vide je l'enregistre dans la variable route
    $route = $_GET['route'];
} else {
    // Sinon la variable route est null
    $route = null;
}

switch($route){
    // Vue catalogue produits
    // case 'catalogue':
    //     $titrePage = 'Nos produits';
    //     include('./views/header.php');
    //     require("views/catalogue.php");
    //     include('./views/footer.php');
    // break;
    // // Vue fiche produit
    // case 'produit':
    //     $titrePage = 'Produit'; // A modifier plus tard !!!
    //     $id = (int) $_GET['id'];
    //     $template = file_get_contents('./views/produit.html');
    //     $template = str_replace('[ID]', $id, $template);
    // break;

    // Vue accueil
    // case 'Accueil':
    //     $titrePage = '';
    //     $template = file_get_contents('./views/index.html');
    // break;

     // Vue page services
     case 'Services':
        $titrePage = 'Services';
        $template = file_get_contents('./views/services.html');
    break;

    // Vue page réalisations
    case 'Realisations':
        $titrePage = 'Realisations';
        $template = file_get_contents('./views/realisations.html');
    break;
   
    // Vue page contact
    case 'Contact':
        $titrePage = 'Contact';
        $template = file_get_contents('./views/contact.html');
    break;
    // Vue page devis
    case 'Demande de devis':
        $titrePage = "Demande de devis";
        $template = file_get_contents('./views/devis.html');
    break;
    default:
    $titrePage = 'Accueil';
    $template = file_get_contents('./views/index.html');
    break;

}

include('views/header.php');
echo $template;
include('views/footer.php');
?>




<!-- Test test test  -->