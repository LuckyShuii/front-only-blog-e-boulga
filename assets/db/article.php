<?php

declare(strict_types=1);

/**
 * Récupération de l'index passé dans l'url afin d'accéder au bon article avec un sanytarizaion
 */
(string) $index_article = stripslashes(htmlspecialchars($_GET['article']));

/**
 * Récupération du contenu des fichier json articles & authors (future database)
 */
(array) $json_articles = file_get_contents("assets/db/db_articles.json");
(array) $json_authors = file_get_contents("assets/db/db_authors.json");
(array) $parsed_articles = json_decode($json_articles);
(array) $parsed_authors = json_decode($json_authors);
 
/**
 * Check if le contenu récupéré est bien du json, sinon renvoyer une erreur
 */
if    (json_validate($json_articles) && json_validate($json_authors)) {
    /**
     * @param array $authors = Stockage du tableau/index "authors" afin de le renvoyer dans la fonction pour itérer dedans
     * @param array $articles = Stockage de toutes les informations composant l'article demandé
     */
    (array) $authors = $parsed_authors->authors;
    (array) $articles = $parsed_articles->articles->$index_article;
    
    /**
     * Stock dans des variables les différents composants de la page article
     */
    (string) $title = $articles->title;
    (string) $coverImg = $articles->coverImg;
    (string) $introduction = $articles->introduction;
    (string) $detail = $articles->detail;
    (string) $description = $articles->description;
    (string) $shadowColor = $articles->shadowColor;
    (string) $releaseDate = $articles->releaseDate;
    (string) $author = $articles->author;
    (string) $altImg = $articles->altImg;

    /**
     * Appel de la fonction findAuthor pour récupérer les informations de l'auteur de cet article précisément, les deux paramètres sont :
     * @param string $author Le nom de l'auteur.
     * @param array $authors Le tableau contenant tous les auteurs.
     * @return array Les informations de l'auteur.
     */
    findAuthor($author, $authors);

    /**
     * Stockage dans des variables des informations contenues dans le tableau renvoyé par la fonction 'findAuthor()' afin de les afficher dans la page article
     */
    (string) $authorFirstName = $authorInformation['firstName'];
    (string) $authorLastName = $authorInformation['lastName'];
    (string) $authorImg = $authorInformation['img'];
    (string) $authorShortDescription = $authorInformation['shortDescription'];
} else {
    /**
     * Erreur renvoyée si le contenu n'est pas du JSON (fichier mal formé)
     */
    throw new Exception("Une erreur s'est produite : Le contenu récupéré n'est pas au format JSON !");
}


/**
 * Fonction permettant de stocker dans un tableau associatif global les informations nécessaires concernant l'auteur en fin de page
 * @param string $authorName Le nom de l'auteur.
 * @param array $authorsList Le tableau contenant tous les auteurs.
 * @return array Les informations de l'auteur.
 */
function findAuthor(string $authorName, array $authorsList): array
{
    global $authorInformation;

    /**
     * Boucle qui met dans un tableau uniquement les informations concernant l'auteur de l'article demandé
     * @param array $authorInformation Le tableau contenant les informations des auteurs.
     * @param array $author Le tableau contenant les informations de l'auteur.
     */
    foreach ($authorsList as $author) {
        if ($author->firstName === $authorName) {
            (array) $authorInformation = [
                'img' => $author->img,
                'firstName' => $author->firstName,
                'lastName' => $author->lastName,
                'shortDescription' => $author->shortDescription
            ];
        }
    };

    /**
     * @return array Les informations de l'auteur.
     */
    return $authorInformation;
}
