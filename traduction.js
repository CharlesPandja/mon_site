//Chargement du DOM
document.addEventListener('DOMContentLoaded', function(){

    /*Sélection de l'élément du DOM identifié par language-select. Ajout d'un écouteur d'évenement qui exécute la 
    fonction après sélection d'une valeur à partir du e.target.value */
    document.getElementById('language-select').addEventListener('change', function(e) {
    const selectedLanguage = e.target.value;
    loadLanguage(selectedLanguage);
    })
    
    function loadLanguage(lang) {
        fetch(`locales/${lang}.json`)
        .then(response => response.json())
        .then(translations => {
            applyTranslations(translations);
        });
    }
    
    function applyTranslations(translations) {
        document.querySelectorAll('[data-translate]').forEach(element => {
            const key = element.getAttribute('data-translate');
            if (translations[key]) {
                if (element.tagName.toLowerCase() === 'input' || element.tagName.toLowerCase() === 'textarea') {
                    element.placeholder = translations[key];
                } else {
                    element.textContent = translations[key];
                }
            }
        });
    }
})