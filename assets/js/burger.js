function toggleMenu() {
    const menu = document.querySelector('.burger');
    const burgerLogo = document.querySelector('.burgerLogo');
    const burgerHiden = document.querySelector('.burgerHiden')
    menu.classList.toggle('active');

    
    // Basculer l'affichage des icônes
    if (menu.classList.contains('active')) {
        burgerLogo.style.display = 'none'; // Masquer l'icône burger
        burgerHiden.style.display = 'block'; // Afficher l'icône croix
    } else {
        burgerLogo.style.display = 'block'; // Afficher l'icône burger
        burgerHiden.style.display = 'none'; // Masquer l'icône croix
    }
}
