<?php 
(array) $json_articles = file_get_contents("assets/db/db_articles.json");
(array) $parsed_articles = json_decode($json_articles, true);

// var_dump($parsed_articles);

// echo gettype($parsed_articles);
$threeArticles = $parsed_articles['articles'];
$threeArticle = array_slice($threeArticles, 0, 1);
//  var_dump($threeArticles);
//  foreach($threeArticle as $element) {
//     echo $element;
//  };

$twoArticles = $parsed_articles['articles'];
$twoArticle = array_slice($threeArticles, 1, 2);
