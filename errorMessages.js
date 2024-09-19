document.addEventListener('DOMContentLoaded', function(){
//sélectionenr les éléments du dom

const success = document.getElementById('success')
const name = document.getElementById('name')
const email = document.getElementById('email')
const objet = document.getElementById('objet')
const message = document.getElementById('message')
const contactForm = document.getElementById('contactForm')
const displayErrorName = document.getElementById('displayErrorName')
const displayErrorEmail = document.getElementById('displayErrorEmail')
const displayErrorObjet = document.getElementById('displayErrorObjet')
const displayErrorMessage = document.getElementById('displayErrorMessage')


//Utiliser la méthode .test() de js pour vérifier la correspondance entre les saisies user et ce que je veux. (sécurité)
contactForm.addEventListener('submit', function(e){
    //Concernant le champ Nom
let isValid = true
if(!(/^[a-zA-ZÀ-ÿ\-]+$/).test(name.value.trim())){
displayErrorName.textContent = 'Vous devez saisir un nom sans espace, ni caractère spécial.'
displayErrorName.style.color='red'
displayErrorName.style.fontWeight='bold'
name.style.backgroundColor='pink'
isValid = false
} else {
    displayErrorName.textContent = ''
}
//Concernant l'email
if(!(/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/).test(email.value.trim())){
displayErrorEmail.textContent = 'Veuillez entrer un format d\'email valide de type xxx@xxx.xxx'
displayErrorEmail.style.color='red'
displayErrorEmail.style.fontWeight='bold'
email.style.backgroundColor='pink'
isValid = false
} else {
    displayErrorEmail.textContent = ''
}

//Concernant l'objet
if(!(/^[\w\s]+$/i).test(objet.value.trim())){
displayErrorObjet.textContent = 'Veuillez saisir un objet ne contenant aucun caractère spécial'
displayErrorObjet.style.color='red'
displayErrorObjet.style.fontWeight='bold'
objet.style.backgroundColor='pink'
isValid = false
} else {
    displayErrorObjet.textContent = ''
}

//Concernant le message
if(message.value.trim().length < 10){
displayErrorMessage.textContent = 'Votre message doit contenir au moins 10 caractères.'
displayErrorMessage.style.color='red'
displayErrorMessage.style.fontWeight='bold'
message.style.backgroundColor='pink'
isValid = false
} else {
    displayErrorMessage.textContent = ''
}

if(!isValid){
e.preventDefault()
} else {
    // Les données sont envoyées à contact.php
    contactForm.setAttribute('action', 'contact.php');
    contactForm.setAttribute('method', 'POST');
}

})
})