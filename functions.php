<?php
// подключение файла с подключением к БД
require_once 'vendor/connect.php';


// получение статей по Figma
function get_articles_figma() {
    global $connect;

    $sql = "SELECT * FROM `articles` WHERE `tag_id` = 1 AND `status_id` = 3;";
    $result = mysqli_query($connect, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $posts;
}


// получение статей по Photoshop
function get_articles_photoshop() {
    global $connect;

    $sql = "SELECT * FROM `articles` WHERE `tag_id` = 2 AND `status_id` = 3;";
    $result = mysqli_query($connect, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $posts;
}


// получение статей по illustrator
function get_articles_illustrator() {
    global $connect;

    $sql = "SELECT * FROM `articles` WHERE `tag_id` = 3 AND `status_id` = 3;";
    $result = mysqli_query($connect, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $posts;
}


// получение уроков по Figma
function get_lessons_figma() {
    global $connect;

    $sql = "SELECT * FROM `lessons` WHERE `tag_id` = 1 AND `status_id` = 3;";
    $result = mysqli_query($connect, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $posts;
}


// получение уроков по Photoshop
function get_lessons_photoshop() {
    global $connect;

    $sql = "SELECT * FROM `lessons` WHERE `tag_id` = 2 AND `status_id` = 3;";
    $result = mysqli_query($connect, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $posts;
}


// получение уроков по illustrator
function get_lessons_illustrator() {
    global $connect;

    $sql = "SELECT * FROM `lessons` WHERE `tag_id` = 3 AND `status_id` = 3;";
    $result = mysqli_query($connect, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $posts;
}

// переход к выбранному уроку
if (isset($_POST['figma-read'])) {
    include "vendor/connect.php";

    $id = $_POST['id-a'];

    $sql = "SELECT * FROM `articles` WHERE `id` = $id";
    $result = mysqli_query($connect,$sql);

    $articles = mysqli_fetch_assoc($result);

}


// переход к выбранной статье
if (isset($_POST['figma-read'])) {
    include "vendor/connect.php";

    $id = $_POST['id-a'];

    $sql = "SELECT * FROM `articles` WHERE `id` = $id";
    $result = mysqli_query($connect,$sql);

    $articles = mysqli_fetch_assoc($result);

}