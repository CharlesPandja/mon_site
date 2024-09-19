// caroussel.js
function moveSlide(button, n) {
    const project = button.closest('.project');
    const slides = project.querySelectorAll('.slides img');
    let slideIndex = parseInt(project.getAttribute('data-slide-index')) || 0;

    slideIndex += n;

    if (slideIndex >= slides.length) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    project.setAttribute('data-slide-index', slideIndex);

    const offset = -slideIndex * 100;
    project.querySelector('.slides').style.transform = `translateX(${offset}%)`;
}

// Optionnel: Auto-play toutes les 3 secondes pour chaque carrousel
// document.querySelectorAll('.project').forEach(project => {
//     setInterval(() => {
//         const nextButton = project.querySelector('.next');
//         if (nextButton) {
//             moveSlide(nextButton, 1);
//         }
//     }, 3000);
// });