<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/about_us.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/logo_fav.svg">
    <link rel="mask-icon" href="assets/img/logo_fav.svg">
</head>
<?php
require_once('header.php'); ?>

<body>
    <main>
        <div id="mainPage">
            <h1 id="pageTitle">L’équipe Blog-e-Boulga</h1>
            <p id="pagePresentation">
                Bienvenue dans notre équipe de développement web, la diversité de nos parcours professionnels se conjugue pour créer une synergie dans la réalisation de notre projet commun : un blog dédié au développement web.<br>
                Notre objectif commun est de faire de cet espace une ressource pour les passionnés de développement web, des débutants aux professionnels chevronnés. Nous croyons que notre collaboration et nos perspectives variées contribueront à faire de ce projet une référence dans l'univers du développement web.
            </p>
            <figure class="separationAbout">
                <img class="longSeparation" src="assets/img/separation.svg" alt="separation">
                <img class="smallSeparation" src="assets/img/small_separation.svg" alt="small separation">
            </figure>

            <?php
            require_once('header.php');
            /**
             * Récupération du contenu des fichier json articles & authors (future database)
             */
            (array) $json_authors = file_get_contents("assets/db/db_authors.json");
            (array) $parsed_authors = json_decode($json_authors);

            /**
             * Check if le contenu récupéré est bien du json, sinon renvoyer une erreur
             */
            if (json_validate($json_authors)) {
                /**
                 * @param array $authors = Stockage du tableau/index "authors" afin de le renvoyer dans la fonction pour itérer dedans
                 */
                (array) $authors = $parsed_authors->authors;
                //var_dump($authors);
                foreach ($authors as $author) {
                    echo '
                    <article>
                    <div class="leftSide">
                        <figure class="profil">
                            <img src="assets/img/' . $author->img . '" alt="Lucas Boillot">
                        </figure>
                        <span class="authorName">
                        <h2>' . $author->firstName . ' ' . $author->lastName . '</h2>
                        </span>
                        <div class="website">
                            <a href=' . $author->website . '><img src="assets/img/myWebSite.svg" alt="Site web personnel"> Mon Site</a>
                        </div>
                        </div>
                        <img class="firstquote" src="assets/img/quote.svg" alt="quote">
                        <aside>
                            <p>
                                ' . $author->fullDescription . ' <span> <img src="assets/img/entypo_quote.svg" alt="endquote"> </span>
                            </p>
                        </aside>
                        <a class="linkedinProfil" href=' . $author->linkedin . '><img src="assets/img/linkedin.svg" alt="Profil Linkedin"> Mon profil Linkedin</a>
                        <a class="githubProfil" href=' . $author->gitHub . '><img src="assets/img/github.svg" alt="Profil Github"> Mon espace Github</a>
                    </article>
                    <figure class="separationAbout">
                                <img class="smallSeparation" src="assets/img/small_separation.svg" alt="small separation">
                            </figure>';
                }
            } else {
                /**
                 * Erreur renvoyée si le contenu n'est pas du JSON (fichier mal formé)
                 */
                throw new Exception("Une erreur s'est produite : Le contenu récupéré n'est pas au format JSON !");
            }
            ?>
        </div>
    </main>
</body>
<?php require_once('footer.php'); ?>

</html>