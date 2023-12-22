<?php
require_once "../Model/bdd.php";
function home()
{
    require_once "../Views/home.php";
}
function posts()
{
    $posts =  findAll();
    require_once "../Views/posts.php";   
}
function post($id)
{
    $post = findOne($id);
    require_once "../Views/post.php";
}