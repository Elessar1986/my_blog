<?php

    function getAllArticles($dblink){
        $query = "SELECT * FROM articles ORDER BY id DESC";
        if (!empty($dblink)) {
            $result = mysqli_query($dblink, $query);
        }
        if(!$result) die(mysqli_error($dblink));
        $num_of_articles = mysqli_num_rows($result);
        $articles = array();
        for ($n=0; $n<$num_of_articles; $n++){
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        return $articles;

    }

    function articles_intro($text, $len = 520){
        return mb_substr($text,0, $len);
    }

function getArticleById($link, $id_article){

    $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article );
    $result = mysqli_query($link, $query);
    if(!$result) die(mysqli_error($link));
    return mysqli_fetch_assoc($result);

}

function addViewToArticle($link, $id){

    $id = (int)($id);
    $query = "SELECT * FROM articles WHERE id='$id'";
    $result = mysqli_query($link, $query);
    if(!$result) die(mysqli_error($link));
    $r = mysqli_fetch_assoc($result);
    $view = $r['views'] + 1;
    $query = "UPDATE articles SET views='$view' WHERE id='$id'";
    $result = mysqli_query($link, $query);
    if(!$result) die(mysqli_error($link));
    return mysqli_affected_rows($link);
}
