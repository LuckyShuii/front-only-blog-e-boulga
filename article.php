<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/article.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/logo_fav.svg">
    <link rel="mask-icon" href="assets/img/logo_fav.svg">
    <title>Accueil</title>
</head>

<body>
    <?php require_once('header.php'); ?>
    <main>
        <p><a id="go_back" href="index.php">Revenir à l'accueil</a></p>
        <?php require_once('assets/db/article.php'); ?>

        <section class="body_text">
            <h1 id="article_title">
                <?php echo $title ?>
            </h1>

            <p class="article_P">
                <?php echo $description ?>
            </p>
        </section>
        <section id="img_section">
            <img id="article_img" src="<?php echo $coverImg ?>" alt="bruh" />
        </section>

        <section class="body_text">
            <h2 class="body_title">Introduction</h2>
            <p class="article_P">
                <?php echo $introduction ?>
            </p>

            <h2 class="body_title">Le détail</h2>
            <p class="article_P">
                <?php echo $detail ?>
            </p>
        </section>

        <section id="author_section">
            <aside id="left_author">
                <img id="author_img" src="assets/img/authors/<?php echo $authorImg ?>" alt="Photo de l'auteur <?php echo $authorFirstName . " " . $authorLastName ?>" />
                <h3 id="author_name"><?php echo $authorFirstName . " " . $authorLastName ?></h3>
            </aside>
            <article id="right_author">
                <h3 id="author_title_desc">A propos de l'auteur :</h3>
                <?php echo $authorShortDescription ?>
            </article>
        </section>
    </main>
    <?php require_once('footer.php'); ?>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/footer.js"></script>
    <script src="assets/js/article.js"></script>
</body>

</html>