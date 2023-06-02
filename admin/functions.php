<?php
    require_once 'vendor/connect.php';

    // получение тегов
    function get_tags() {
        global $connect;

        $sql = "SELECT * FROM tag";
        $result = mysqli_query($connect, $sql);

        $tags = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $tags;
    }

    // получение статусов
    function get_statuses() {
        global $connect;

        $sql = "SELECT * FROM `status`";
        $result = mysqli_query($connect, $sql);

        $statuses = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $statuses;
    }


    // сохранение быстрого черновика статьи
    if (isset($_POST['save-aq'])) {
        $title = $_POST['header-a'];
        $content = $_POST['content-articleq'];
        $status = 1;
        $tag = $_POST['tag-aq'];

        $sql = "INSERT INTO articles (title, content, tag_id, status_id) VALUES ('$title', '$content', $tag, $status)";

        $result = mysqli_query($connect,$sql);
    }


    // сохранение быстрого черновика урока
    if (isset($_POST['save-lq'])) {
        $title = $_POST['header-lq'];
        $content = $_POST['content-lessonq'];
        $status = 1;
        $tag = $_POST['tag-lq'];

        $sql = "INSERT INTO lessons (title, content, tag_id, status_id) VALUES ('$title', '$content', $tag, $status)";

        $result = mysqli_query($connect,$sql);
    }


    // получение таблицы со статьями
    function get_table_article() {
        global $connect;

        $sql = "SELECT articles.id, articles.image, articles.title, articles.content, tag.tag, status.status FROM articles JOIN tag ON tag.id=articles.tag_id JOIN `status` ON status.id=articles.status_id";

        $result = mysqli_query($connect, $sql);

        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        $result = '';
        foreach ($data as $elem) {
            $result.='<tr>';
            $result.='<td><form action="" method="post"><span class="justify-content-center"><input type="text" name="id-a" id="id-a" value="'.$elem['id'] .'" style="display: none;"><button type="submit" name="delete" style="border: none; background-color: #fff;"><i class="fa-solid fa-xmark" style="margin-left: 5px; margin-right: 5px;"></i></button></span></form><form action="update_article.php" method="post"><span class="justify-content-center"><input type="text" name="id-a" id="id-a" value="'.$elem['id'] .'" style="display: none;"><button type="submit" name="update" style="border: none; background-color: #fff;"><i class="fa-solid fa-pen" style="margin-left: 5px; margin-right: 5px;"></i></button></span></form></span></td>';
            $result .='<td><p>' .$elem['id'] . '</p></td>';
            $result .='<td>'.'<div class="zagolovok-table"' .$elem['title'] . '</div>' . '</td>';
            $result .='<td class="zagolovok-table">' .$elem['content'] . '</td>';
            $result .='<td>' .$elem['tag'] . '</td>';
            $result .='<td>' .$elem['status'] . '</td>';
            $result .='</tr>';
        }

        echo $result;
    }


    // получение таблицы с уроками
    function get_table_lesson() {
        global $connect;

        $sql = "SELECT lessons.id, lessons.image, lessons.title, lessons.content, tag.tag, status.status FROM lessons JOIN tag ON tag.id=lessons.tag_id JOIN `status` ON status.id=lessons.status_id";

        $result = mysqli_query($connect, $sql);

        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        $result = '';
        foreach ($data as $elem) {
            $result.='<tr>';
            $result.='<td><div id="'.$elem['id'] .'" name="td"><span class="justify-content-center"><i class="fa-solid fa-xmark" data-bs-toggle="modal" data-bs-target="#deleteModal"></i><i class="fa-solid fa-copy"></i><i class="fa-solid fa-pen"></i></span></div></td>';
            $result .='<td>' .$elem['id'] . '</td>';
            $result .='<td>'.'<div class="zagolovok-table"' .$elem['image'] . '</div>' . '</td>';
            $result .='<td>'.'<div class="zagolovok-table"' .$elem['title'] . '</div>' . '</td>';
            $result .='<td>'.'<div class="zagolovok-table"' .$elem['content'] . '</div>' . '</td>';
            $result .='<td>' .$elem['tag'] . '</td>';
            $result .='<td>' .$elem['status'] . '</td>';
            $result .='</tr>';
        }

        echo $result;
    }

    // if (isset($_POST['figma-read'])) {
    //     include "vendor/connect.php";
    
    //     $id = $_POST['id-a'];
    
    //     $sql = "SELECT * FROM `articles` WHERE `id` = $id";
    //     $result = mysqli_query($connect,$sql);
    
    //     $articles = mysqli_fetch_assoc($result);
    
    // }

    if (isset($_POST['figma-read'])) {
        include "vendor/connect.php";
    
        $id = $_POST['id-a'];
    
        $sql = "SELECT * FROM `articles` WHERE `id` = $id";
        $result = mysqli_query($connect,$sql);
    
        $ups = mysqli_fetch_assoc($result);
    
    }

// function get_article_in_table() {
//     global $connect;

//     $sql = "SELECT articles.id, articles.image, articles.title, articles.content, tag.tag, status.status FROM articles JOIN tag ON tag.id=articles.tag_id JOIN `status` ON status.id=articles.status_id";

//     $result = mysqli_query($connect, $sql);

//     $ups = mysqli_fetch_all($result, MYSQLI_ASSOC);

//     return $ups;
// }

        // $sql = "INSERT INTO articles_prob (title, content, tag_id, publication_status_id) VALUES (`title` = '$title', `content` = '$content', `tag_id` = $tag, `publication_status_id` = $status)";

 // global $connect;

        // $sql = "INSERT INTO articles_prob (title, content, tag_id, publication_status_id) VALUES (`title` = '$title', `content` = '$content', `tag_id` = $tag, `publication_status_id` = $status)";
    // сохранение статьи из раздела добавить / редактировать статью
    if (isset($_POST['save-a'])) {
        include "vendor/connect.php";

        $title = $_POST['title'];
        $file = $_POST['file'];
        $date = $_POST['date'];
        $tag = $_POST['tag'];
        $status = $_POST['status'];
        $content = $_POST['content-article'];


        $sql = "INSERT INTO articles (image, title, content, tag_id, status_id) VALUES ('$file','$title', '$content', $tag, $status)";

        $result = mysqli_query($connect,$sql);

    }

    // сохранение статьи из раздела добавить / редактировать урок
    if (isset($_POST['save-l'])) {
        include "vendor/connect.php";

        $title = $_POST['title'];
        $file = $_POST['file'];
        $date = $_POST['date'];
        $tag = $_POST['tag'];
        $status = $_POST['status'];
        $content = $_POST['content-lessons'];

        $sql = "INSERT INTO lessons_prob (image, title, content, tag_id, publication_status_id) VALUES ('$file','$title', '$content', $tag, $status)";

        $result = mysqli_query($connect,$sql);
    }    


    













?>