<?php
require_once "getPDO.php";
function findAll()
{
    $requete = "SELECT * FROM `article` ORDER BY `id` DESC";
    $data = getPDO()->query($requete);
    $articles = $data->fetchAll();
    return $articles;
}
function findOne($id)
{
    $getPost = getPDO()->prepare("SELECT * FROM `article` WHERE id=:id");
    $getPost->execute(["id"=>$id]);
    $post = $getPost->fetch();
    return $post;    
}
