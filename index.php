<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-translate="title">Charles Pandja - Développeur Web</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="assets/images/photo_cv.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#welcome" data-translate="home">Accueil</a></li>
                <li><a href="#portfolio" data-translate="portfolio">Portfolio</a></li>
                <li><span id="cv" class="cv" data-translate="cv">CV</span></li>
                <li><a href="#contact" data-translate="contact">Contact</a></li>
                <select id="language-select">
                    <option value="fr" data-translate="selected_language_french">français</option>
                    <option value="en" data-translate="selected_language_english">anglais</option>
                    <option value="es" data-translate="selected_language_spanish">espagnol</option>
                    <option value="de" data-translate="selected_language_german">allemand</option>
                    <option value="zh" data-translate="selected_language_chinese">chinois</option>
                </select>
            </ul>
        </nav>
    </header>

    <section id="welcome">
        <h1 data-translate="welcome">Bienvenue</h1><br><br>
        <div class="welcome">
            <div class="image"><img src="assets/images/photo_cv.png" style="border-radius: 75%;" width="250"></div>
            <div class="text" data-translate="welcome_message">
                Je m'appelle Charles Pandja. Cette plateforme vous présente mon portfolio ainsi que les liens vers les
                dépôts github.
            </div>
        </div>
    </section>

    <div class="cvBackground" id="cvBackground">
        <div class="cvInterface" id="cvInterface">
            <span class="btnCvClose">&times;</span>
            <span class="cvStyle">Souhaitez-vous télécharger mon CV ?</span>
            <button class="btnCvEn"><a href="cv/CharlesCV_EN.pdf" download="CharlesCV_EN.pdf">Oui, télécharger la version anglaise.</a></button>
            <button class="btnCvFr"><a href="#">Oui, télécharger la version française.</a></button>
            <button class="btnCvNo" id="btnCvNo">Non, il s'agit d'une erreur.</button>
        </div>
    </div>

    <section id="portfolio">
        <h2 data-translate="portfolio_applications">Portfolio > Applications web</h2>
        <div class="part">
            <div class="project">
                <h3 data-translate="project_ecommerce_title">E-commerce</h3>
                <p data-translate="project_ecommerce_description">Application web permettant de parcourir et de
                    sélectionner des produits, gérer un panier et passer
                    des commandes.
                    Principale technologie utilisée: PHP (MVC).</p>
                <div class="slides">
                    <img src="assets/images/ecommerce_1.png" style="width: 190px">
                    <img src="assets/images/ecommerce_2.png" style="width: 190px">
                    <img src="assets/images/ecommerce_3.png" style="width: 190px">
                    <img src="assets/images/ecommerce_4.png" style="width: 190px">
                </div>
                <button class="prev" onClick="moveSlide(this, -1)">&#10094;</button>
                <button class="github" data-translate="go_to_github"><a
                        href="https://github.com/CharlesPandja/Charles-E-commerce" target="_blank">Aller
                        sur github</a></button>
                <button class="next" onClick="moveSlide(this, 1)">&#10095;</button>
            </div>
            <div class="project" data-slide-index="0">
                <h3 data-translate="project_salary_title">Gestion salaire</h3>
                <p data-translate="project_salary_description">Une application pour gérer et visualiser (graphique) ses
                    dépenses mensuelles. Simple, élégante et
                    efficace. Technologies
                    utilisées: JavaScript, HTML, CSS.</p>
                <div class="slides">
                    <img src="assets/images/salaire_1.png" style="width: 190px">
                    <img src="assets/images/salaire_2.png" style="width: 190px">
                    <img src="assets/images/salaire_3.png" style="width: 190px">
                    <img src="assets/images/salaire_4.png" style="width: 190px">
                    <img src="assets/images/salaire_5.png" style="width: 190px">
                    <img src="assets/images/salaire_6.png" style="width: 190px">
                    <img src="assets/images/salaire_7.png" style="width: 190px">
                </div>
                <button class="prev" onClick="moveSlide(this, -1)">&#10094;</button>
                <button class="github" data-translate="go_to_github"><a
                        href="https://github.com/CharlesPandja/gestion_salaire" target="_blank">Aller
                        sur github</a></button>
                <button class="next" onClick="moveSlide(this, 1)">&#10095;</button>
            </div>
            <div class="project">
                <h3 data-translate="project_butcher_title">Boucherie</h3>
                <p data-translate="project_butcher_description">Une webapp permettant aux clients de créer un compte et
                    de se connecter afin de passer des commandes
                    sécurisées. Technologies
                    utilisées: JavaScript, HTML, CSS, PHP. Base de données : MySQL.</p>
                <div class="slides">
                    <img src="assets/images/boucherie_1.png" style="width: 190px">
                    <img src="assets/images/boucherie_3.png" style="width: 190px">
                    <img src="assets/images/boucherie_4.png" style="width: 190px">
                    <img src="assets/images/boucherie_5.png" style="width: 190px">
                    <img src="assets/images/boucherie_6.png" style="width: 190px">
                    <img src="assets/images/boucherie_7.png" style="width: 190px">
                </div>
                <button class="prev" onClick="moveSlide(this, -1)">&#10094;</button>
                <button class="github" data-translate="go_to_github"><a
                        href="https://github.com/CharlesPandja/ButcherShop" target="_blank">Aller
                        sur github</a></button>
                <button class="next" onClick="moveSlide(this, 1)">&#10095;</button>
            </div>
        </div>
        <div class="part">

            <div class="project" data-slide-index="0">
                <h3 data-translate="project_quiz_title">Jeu de quiz</h3>
                <p data-translate="project_quiz_description">Une plateforme interactive conçue pour tester les
                    connaissances des utilisateurs sur divers sujets.
                    Technologies utilisées: HTML, CSS, JavaScript.</p>
                <div class="slides">
                    <img src="assets/images/quiz_1.png" style="width: 190px">
                    <img src="assets/images/quiz_2.png" style="width: 190px">
                    <img src="assets/images/quiz_3.png" style="width: 190px">
                </div>
                <button class="prev" onClick="moveSlide(this, -1)">&#10094;</button>
                <button class="github" data-translate="go_to_github"><a
                        href="https://github.com/CharlesPandja/Quiz-Game" target="_blank">Aller sur
                        github</a></button>
                <button class="next" onClick="moveSlide(this, 1)">&#10095;</button>
            </div>
            <div class="project">
                <h3 data-translate="project_calculator_title">Calculatrice</h3>
                <p data-translate="project_calculator_description">Programme web écrit principalement en javascript et
                    effectuant des opérations mathématiques comme une
                    calculatrice. Technologies utilisées : HTML, CSS et Javascript</p>
                <div class="slides">
                    <img src="assets/images/calc_1.png" style="width: 190px">
                    <img src="assets/images/calc_2.png" style="width: 190px">
                    <img src="assets/images/calc_3.png" style="width: 190px">
                </div>
                <button class="prev" onClick="moveSlide(this, -1)">&#10094;</button>
                <button class="github" data-translate="go_to_github"><a
                        href="https://github.com/CharlesPandja/calculatrice" target="_blank">Aller sur
                        github</a></button>
                <button class="next" onClick="moveSlide(this, 1)">&#10095;</button>
            </div>
            <div class="project">
                <h3 data-translate="project_breaker_title">Jeu de casse-briques</h3>
                <p data-translate="project_breaker_description">Application web de jeu de Casse-Briques ! Développée en
                    HTML, CSS et JavaScript, ce classique
                    intemporel vous offre des heures de divertissement addictif.</p>
                <div class="slides">
                    <img src="assets/images/casseb_1.png" style="width: 190px">
                    <img src="assets/images/casseb_2.png" style="width: 190px">
                    <img src="assets/images/casseb_3.png" style="width: 190px">
                </div>
                <button class="prev" onClick="moveSlide(this, -1)">&#10094;</button>
                <button class="github" data-translate="go_to_github"><a
                        href="https://github.com/CharlesPandja/Jeu_de_casse_brique" target="_blank">Aller sur
                        github</a></button>
                <button class="next" onClick="moveSlide(this, 1)">&#10095;</button>
            </div>
        </div>
        <div class="part">

            <div class="project" data-slide-index="0">
                <h3 data-translate="project_inventory_title">Inventaire</h3>
                <p data-translate="project_inventory_description">Une plateforme interactive conçue pour effectuer des
                    inventaires. Technologie principalement utilsée
                    : PHP (Modèle MVC).</p>
                <div class="slides">
                    <img src="assets/images/inventaire_1.png" style="width: 190px">
                    <img src="assets/images/inventaire_2.png" style="width: 190px">
                    <img src="assets/images/inventaire_3.png" style="width: 190px">
                    <img src="assets/images/inventaire_4.png" style="width: 190px">
                    <img src="assets/images/inventaire_5.png" style="width: 190px">
                </div>
                <button class="prev" onClick="moveSlide(this, -1)">&#10094;</button>
                <button class="github" data-translate="go_to_github"><a
                        href="https://github.com/CharlesPandja/gestion_inventaire" target="_blank">Aller sur
                        github</a></button>
                <button class="next" onClick="moveSlide(this, 1)">&#10095;</button>
            </div>
            <div class="project">
                <h3 data-translate="project_real_estate_title">Gestion immobilière</h3>
                <p data-translate="project_real_estate_description">Programme web obsolète. En travaux...</p>
            </div>
            <div class="project">
                <h3 data-translate="project_car_title">Gestion de parc automobile</h3>
                <p data-translate="project_car_description">Application web obsolète. En travaux...</p>
            </div>
        </div><br><br><br>
        <h2 data-translate="portfolio_sites">Portfolio > Sites web</h2>
        <div class="part">
            <div class="project">
                <h3 data-translate="portfolio_keutch_title">Groupe Keutch</h3>
                <p data-translate="portfolio_keutch_description">Site internet réalisé en 2019 pour le compte de la
                    société Groupe Keutch. CMS utilisé : WordPress</p>
                <div class="slides">
                    <img src="assets/images/gk_1.png" style="width: 190px">
                    <img src="assets/images/gk_2.png" style="width: 190px">
                    <img src="assets/images/gk_3.png" style="width: 190px">
                </div>
                <button class="prev" onClick="moveSlide(this, -1)">&#10094;</button>
                <button class="github" data-translate="go_to_github"><a href="https://www.groupekeutch.com/"
                        target="_blank">Aller sur
                        le site</a></button>
                <button class="next" onClick="moveSlide(this, 1)">&#10095;</button>
            </div>

            <div class="project">
                <h3 data-translate="portfolio_somexport_title">Somexport</h3>
                <p data-translate="portfolio_somexport_description">Site internet permettant aux clients de consulter
                    les produits proposées et d'entrer en contact avec
                    les commerciaux. CMS utilisé : WordPress</p>
                <div class="slides">
                    <img src="assets/images/somexport_1.png" style="width: 190px">
                    <img src="assets/images/somexport_2.png" style="width: 190px">
                    <img src="assets/images/somexport_3.png" style="width: 190px">
                    <img src="assets/images/somexport_4.png" style="width: 190px">
                </div>
                <button class="prev" onClick="moveSlide(this, -1)">&#10094;</button>
                <button class="github" data-translate="go_to_github"><a href="https://www.somexport.com/"
                        target="_blank">Aller sur
                        le site</a></button>
                <button class="next" onClick="moveSlide(this, 1)">&#10095;</button>
            </div>
            <div class="project">
                <h3 data-translate="coming_title">A venir</h3>
                <p data-translate="coming_description">D'autres sites sont en projet de création...</p>
            </div>
        </div>
        </div>
    </section>

    <section id="contact">
        <h2 data-translate="contact_title">Contact</h2>
        <form id="contactForm" action="contact.php" method="POST">
            <?php if (isset($_GET['msg'])) {
                if ($_GET['msg'] === 'success') {
                    echo "<p style='color:green'>Votre message a été envoyé avec succès.</p>";
                } else {
                    echo "<p style='color:red'>Une erreur s'est produite. Veuillez réessayer plus tard.</p>";
                }
            } ?>
            <label for="name" data-translate="name_label">Nom :</label>
            <input type="text" id="name" name="name" required>
            <div id="displayErrorName"></div>
            <label for="email" data-translate="email_label">Email :</label>
            <input type="email" id="email" name="email" required>
            <div id="displayErrorEmail"></div>
            <label for="objet" data-translate="objet_label">Objet :</label>
            <input type="text" id="objet" name="objet" required>
            <div id="displayErrorObjet"></div>
            <label for="message" data-translate="message_label">Message :</label>
            <textarea id="message" name="message" required></textarea>
            <div id="displayErrorMessage"></div>
            <button type="submit" data-translate="submit_button">Envoyer</button>
        </form>
    </section>
    <footer>
        <p data-translate="footer_text">&copy; 2024 Charles Pandja. Tous droits réservés.</p>
    </footer>

    <script src="errorMessages.js"></script>
    <script src="caroussel.js"></script>
    <script src="traduction.js"></script>
    <script src="cv.js"></script>
</body>

</html>