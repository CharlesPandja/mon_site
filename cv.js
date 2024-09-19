document.addEventListener('DOMContentLoaded', function() {
    let cv = document.getElementById('cv');
    let cvBackground = document.getElementById('cvBackground');
    let btnCvClose = document.querySelector('.btnCvClose');
    let btnCvNo = document.getElementById('btnCvNo');

    // Au clic sur le bouton cv du menu, le popup s'ouvre
    cv.addEventListener('click', function() {
        cvBackground.style.display = "flex"; // On utilise flex pour centrer le contenu
    });

    // Au clic sur le bouton de fermeture ou "Non, il s'agit d'une erreur"
    btnCvClose.addEventListener('click', function() {
        cvBackground.style.display = "none";
    });

    btnCvNo.addEventListener('click', function() {
        cvBackground.style.display = "none";
    });

    // Fermer le popup en cliquant n'importe où en dehors du popup
    window.addEventListener('click', function(event) {
        if (event.target == cvBackground) {
            cvBackground.style.display = "none";
        }
    });
});
