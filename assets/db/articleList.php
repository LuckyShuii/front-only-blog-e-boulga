<?php 
(array) $json_articles = file_get_contents("assets/db/db_articles.json");
(array) $parsed_articles = json_decode($json_articles, true);


$oneArticles = $parsed_articles['articles'];
$oneArticle = array_slice($oneArticles, 0, 1);

$twoArticles = $parsed_articles['articles'];
$twoArticle = array_slice($oneArticles, 1, 2);
