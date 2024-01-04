<?php

declare(strict_types=1);

(array) $errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

    /**
     * On vérifie que les champs obligatoires sont remplis
     */
    if (empty($_POST['prenom'])) {
        $errors['prenom'] = 'Vous devez renseigner votre nom';
    }
    if (empty($_POST['nom'])) {
        $errors['nom'] = 'Vous devez renseigner votre prénom';
    }

    if (empty($_POST['mail'])) {
        $errors['mail'] = 'Vous devez renseigner votre mail';
    }

    if (empty($_POST['subject'])) {
        $errors['subject'] = 'Vous devez renseigner votre sujet';
    }

    if (empty($_POST['message'])) {
        $errors['message'] = 'Vous devez renseigner votre message';
    }
    /**
     * Si le tableau d'erreurs est vide, on peut envoyer le mail
     */
    if (empty($errors)) {
        /**
         * On sécurise les données reçues
         */
        (string) $prenom = secure_XSS_SQL($_POST['prenom']);
        (string) $nom = secure_XSS_SQL($_POST['nom']);
        (string) $mail = secure_XSS_SQL($_POST['mail']);
        (string) $subject = secure_XSS_SQL($_POST['subject']);
        (string) $message = secure_XSS_SQL($_POST['message']);

        // TODO : ENVOYER UN MAIL V2 DU SITE

        header('Location: contact_us.php');
        exit();
    } else {
        header('Location: contact_us.php');
        exit();
    }
} else {
    /**
     * Si la méthode HTTP est différente de POST, on redirige vers la page contact_us.php
     */
    header('Location: contact_us.php');
    exit();
}

/**
 * Fonction qui permet de sécuriser les données
 * @param $data
 * @return string
 */
function secure_XSS_SQL(string $data): string
{
    (string) $data = trim($data); // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    (string) $data = stripslashes($data); // Supprime les antislashs d'une chaîne
    (string) $data = strip_tags($data); // Supprime les balises HTML et PHP d'une chaîne
    (string) $data = htmlspecialchars($data); // Convertit les caractères spéciaux en entités HTML
    return $data;
}
