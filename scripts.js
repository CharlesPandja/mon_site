document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('contactForm');
    const modal = document.getElementById("cvModal");
    const span = document.getElementsByClassName("close")[0];
    const cvLink = document.getElementById("cv-link");

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch('submit_form.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data.includes("succès")) {
                alert("Message envoyé avec succès!");
                form.reset();
            } else {
                alert("Erreur: " + data);
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Erreur lors de la soumission du formulaire.');
        });
    });

    // Fonction pour afficher le modal du CV
    function displayCV(cvData) {
        const cvContent = document.getElementById('cv-content');
        cvContent.innerHTML = '';

        const experiencesSection = document.createElement('div');
        experiencesSection.innerHTML = "<h3>Expériences Professionnelles</h3>";
        cvData.experiences.forEach(exp => {
            const expDiv = document.createElement('div');
            expDiv.innerHTML = `<h4>${exp.title} chez ${exp.company}</h4>
                                <p>${exp.duration}</p>
                                <p>${exp.description}</p>`;
            experiencesSection.appendChild(expDiv);
        });

        const skillsSection = document.createElement('div');
        skillsSection.innerHTML = "<h3>Compétences</h3>";
        const skillsList = document.createElement('ul');
        cvData.skills.forEach(skill => {
            const skillItem = document.createElement('li');
            skillItem.textContent = skill;
            skillsList.appendChild(skillItem);
        });
        skillsSection.appendChild(skillsList);

        cvContent.appendChild(experiencesSection);
        cvContent.appendChild(skillsSection);
    }

    cvLink.onclick = function(e) {
        e.preventDefault();
        modal.style.display = "block";
        // Example CV data
        const cvData = {
            experiences: [
                {
                    title: "Développeur Web",
                    company: "Entreprise X",
                    duration: "Janvier 2020 - Présent",
                    description: "Développement de sites web et applications web avec diverses technologies."
                },
                {
                    title: "Designer Graphique",
                    company: "Agence Y",
                    duration: "Mars 2018 - Décembre 2019",
                    description: "Création de designs graphiques pour des campagnes de marketing et des sites web."
                }
            ],
            skills: [
                "HTML", "CSS", "JavaScript", "PHP", "MySQL", "Adobe Photoshop", "Adobe Illustrator"
            ]
        };
        displayCV(cvData);
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});