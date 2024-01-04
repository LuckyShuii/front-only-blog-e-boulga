<?php require_once('./assets/db/articleList.php'); ?>
<section class=hotNews_block>
    <?php foreach ($threeArticle as $art) : ?>
        <article class="card bigNews">
            <a href="article.php?article=<?= $art['parameter_url'] ?>">
                <div class="title_bigNews title_news">
                    <img class="big" src="<?= $art['coverImg'] ?>" alt="image de l'article principal">
                    <div class="articleTeasing">
                        <h1><?= $art['titleHome'] ?></h1>
                        <p><?= $art['description'] ?></p>
                    </div>
                </div>
            </a>
        </article>
    <?php endforeach; ?>
    <article class="card middle_news">
        <?php foreach ($twoArticle as $artTwo) : ?>
            <a href="article.php?article=<?= $artTwo['parameter_url'] ?>">
                <div class="card1">
                    <img class="small" src="../assets/img/home_picture/montagne1.png" alt="image de l'article secondaire">
                    <h2><?= $artTwo['title'] ?></h2>
                </div>
            </a>
        <?php endforeach ?>
    </article>
</section>

<span class="separation_bar"><img class="separation" src="/assets/img/separation.svg" alt="Barre de séparation"></span>

<section class="article_list">
    <?php foreach ($parsed_articles as $article) : ?>
        <?php foreach ($article as $articleInfo) : ?>
            <a href="article.php?article=<?= $articleInfo['parameter_url'] ?>">
                <article class="article_block">
                    <div class="card_container">
                        <div class="card2">
                            <img class="medium" src="../assets/img/home_picture/montagne1.png" alt="image de l'article secondaire">
                        </div>
                    </div>
                    <div class="little_article">
                        <h3><?= $articleInfo['title'] ?></h3>
                        <p><?= $articleInfo['description'] ?>
                        </p>
                    </div>
                </article>
            </a>
        <?php endforeach; ?>
    <?php endforeach; ?>
</section>