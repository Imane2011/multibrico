<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/header.css" rel="stylesheet" />
    <link href="assets/css/footer.css" rel="stylesheet" />
    <link href="assets/css/index.css" rel="stylesheet" />
    <link href="assets/css/services.css" rel="stylesheet" />
    <link href="assets/css/realisations.css" rel="stylesheet" />
    <link href="assets/css/contact.css" rel="stylesheet" />
    <link href="assets/css/devis.css" rel="stylesheet" />
</head>
<body>
<header>
    <div class=menuDesktop>
        <div class="logo"><img src="assets/img/Média-removebg-preview.png" alt="logo"></div>
        <nav class=desktop>
            <ul class="menu">
                <li class="navbarList"><a href="?route=Accueil">Entreprise</a></li>
                <li class="navbarList"><a href="?route=Services">Services</a></li>
                <li class="navbarList"><a href="?route=Realisations">Réalisations</a></li>
                <li class="navbarList"><a href="?route=Contact">Contactez-nous</a></li>
            </ul>
         </nav>
        <button type="button" class="devisBtn"><a href="?route=Demande de devis">Demande de devis</a></button>
        
    </div>
        

    <div class="menuMobile">
        <div class="burgerLogo" onclick="toggleMenu()">☰</div>
        <div class="burgerHiden" onclick="toggleMenu()" style="display:none">☒</div>
        <nav class="burger">
                <a href="?route=Accueil">Entreprise</a>
                <a href="?route=Services">Services</a>
                <a href="?route=Realisations">Réalisation</a>
                <a href="?route=Contact">Contactez-nous</a>
                <a href="?route=Demande de devis">Demande de devis</a>
                    
         </nav>
            </div> 
    </header>
    <script src="assets/js/burger.js"></script>
</body>
</html>