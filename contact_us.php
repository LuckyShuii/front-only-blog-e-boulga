<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/contact_us.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/logo_fav.svg">
    <link rel="mask-icon" href="assets/img/logo_fav.svg">
    <title>Accueil</title>
</head>

<?php require_once('header.php'); ?>

<body>
    <main>
        <div id="informationSocietyBlock">
            <section id="informationSociety">
                <p>Contactez-nous</p>
                <img src="/assets/img/blog-e-boulga-small-logo-black.svg" alt="small logo black">
                <section>
                    <p>Blog-e-boulga Inc.</p>
                    <p>15 rue de la truffe <br />12345 Chat-City WORLD</p>
                    <p>Tel: 0123456789</p>
                    <p>Mail us: contact@blogeboulga.com</p>
                </section>
            </section>
        </div>
        <div id="contactUsBlock">
            <form action="" method="POST" class="contactUsForm">
                <p>Contacter l’équipe e-Boulga</p>
                <div>
                    <label for="firstname">Votre prénom:</label>
                    <input type="text" name="firstname" placeholder="John" />
                </div>
                <div>
                    <label for="name">Votre nom:</label>
                    <input type="text" name="name" placeholder="Doe" />
                </div>
                <div>
                    <label for="mail">Votre adresse mail:</label>
                    <input type="text" name="mail" placeholder="john@doe.com" />
                </div>
                <div>
                    <label for="subject">Sujet de votre message:</label>
                    <input type="text" name="subject" placeholder="Propostion d'article" />
                </div>
                <div>
                    <label for="messsage">Votre message:</label>
                    <textarea id="message" rows="5"></textarea>
                </div>
                <div id="validationCheck">
                    <input type="checkbox" name="validation" id="validation" />
                    <label for="validation">Donec interdum facilisis massa nec maximus. Ut convallis fringilla finibus. Praesent convallis placerat risus. Morbi luctus commodo magna rhoncus lobortis.</label>
                </div>
                <div id="validationButton">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </main>
    <script src="assets/js/header.js" defer></script>
    <script src="assets/js/footer.js" defer></script>
</body>
<?php require_once('footer.php'); ?>

</html>