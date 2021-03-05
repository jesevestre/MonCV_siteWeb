/* FONCTION QUI PERMET D'AFFICHER ET DE FAIRE DISPARAITRE LES SOUS MENUS */

function ouvrirFermerSousMenu(div) {
    var divContenu = div.getElementsByTagName('div')[1];
    if(divContenu.style.display == 'block') {
        divContenu.style.display = 'none';
    } else {
        divContenu.style.display = 'block';
    }
}

/* ---------------------------------------------------------------------- */