

// Fonction permettant la redirection en mettant le lien directement dans l'html
function maRedirection(lien) {
    location.href = lien;
}

// Fonction permettant de changer dynamiquement le nom du menu de la navbar pour un meilleurs rendu visuel
function changeMenu1(){
    document.getElementById('descript').textContent= 'Bienvenue que pouvons nous faire pour vous?';
};

function changeMenu2(){
    document.getElementById('descript').textContent= 'Notre Actualité';
};

function changeMenu3(){
    document.getElementById('descript').textContent= 'Nos ateliers cuisine';
};

function changeMenu4(){
    document.getElementById('descript').textContent= 'Nos Créations';
};

function changeMenu5(){
    document.getElementById('descript').textContent= 'Commandez nos créations';
};

function changeMenu6(){
    document.getElementById('descript').textContent= 'Contactez nous';
};
