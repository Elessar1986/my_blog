<?php

require_once "../includes/simple_html_dom.php";
require_once "../includes/db.php";
require_once "db_engine.php";

$html = file_get_html("https://dou.ua/lenta/best/");

//foreach($html->find('a') as $element)
//    echo $element->href . '<br>';


$res = $html->find('article');
$articles = [];

foreach ($res as $r){
    $art = $r->children(0)->children(0)->href;
    $html = file_get_html($art);
    $html = $html->find('article',0);
    $html->find(".b-post-tags", 0)->outertext = '';
    $title= $html->find("h1",0)->innertext;
    $html->find("h1",0)->outertext = "";
    $img = $r->children(0)->children(0)->children(0)->src;
    $text = $html->innertext;
    $datetime = date("Y-m-d H:i:s");
    $footer = "<br><br>
                    <h3>Источник: <a class='red-text' href='$art'>DOU.ua</a></h3>
                    <br>";
    $text .= $footer;
    addArticle( $title, $text, $datetime, $img);
}

//foreach ($articles as $art){
//    $html = file_get_html($art);
//    $html = $html->find('article',0);
//    $html->find(".b-post-tags", 0)->outertext = '';
//    $title= $html->find("h1",0)->innertext;
//    $html->find("h1",0)->outertext = "";
//    $img = $html->find("img", 0 )->src;
//    $text = $html->innertext;
//    $datetime = date("Y-m-d H:i:s");
//    $footer = "<br><br>
//                    <h3>Источник: <a class='red-text' href='$art'>DOU.ua</a></h3>
//                    <br>";
//    $text .= $footer;
//    addArticle( $title, $text, $datetime, $img);
//}

header("Location: ../index.php");
exit;