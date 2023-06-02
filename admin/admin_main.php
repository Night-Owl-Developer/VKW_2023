<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- подключение bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- подключение библиотеки Font-Awesome -->
        <script src="https://kit.fontawesome.com/56a0061f5c.js" crossorigin="anonymous"></script>

    <!-- мои стили -->
        <link rel="stylesheet" href="/fonts.css">
        <link rel="stylesheet" href="/css/admin.css">
        <script src="/ckeditor\ckeditor.js"></script>
    <title>Main Admin Beta</title>
</head>
<body>
    <?php 
        require_once 'functions.php'; 
        require_once 'modal.php';
    ?>
    <div class="header">
        <a href="/index.php"><img src="/image/logotype/logotype.png" class="logotype" alt="logotype site"></a>
        <a href="profile.php"><img src="/image/icons/admin.png" class="adminlog" alt="admin"></a>
    </div>

    <div class="sidenav">
        <a href="index.php">Главная</a>
        <a href="admin_articles.php">Статьи</a>
        <a href="admin_lessons.php">Уроки</a>
    </div>

    <div class="container" style="margin-top: 130px; margin-left:13%;">
        <center><h3>Добро пожаловать в консоль администратора!</h3></center>

        <div class="draft">
            <h5>Быстрый черновик статьи</h5>
            <hr class ="hr-shadow">
            <form action="" method="post">
                <div class="inputs">
                    <input type="text" name="header-aq" id="header-aq" placeholder="Введите заголовок статьи">
                    <textarea name="content-articleq" id="content-articleq" placeholder="Введите текст статьи"></textarea>
                    <script>CKEDITOR.replace( 'content-article' );</script>
                    <div class="states">
                        <input type="submit" id="save-aq" name="save-aq" class="save" style="margin-right:50px; margin-top: 2%;" value="Сохранить">
                        <input type="text" style="width: 110px; margin-top: 2%;" id="status-aq" name="status-aq" value="черновик" readonly>
                        <select name="tag-aq" id="tag-aq" class="select-apply">
                            <?php $tags = get_tags(); ?>
                            <?php foreach ($tags as $tag) : ?>
                                <option value="<?=$tag['id']?>"><?=$tag['tag']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </form> 
        </div>

        <div class="draft">
            <h5>Быстрый черновик урока</h5>
            <hr class ="hr-shadow">
            <form action="" method="post">
                <div class="inputs">
                    <input type="text" name="header-lq" id="header-lq" placeholder="Введите заголовок урока">
                    <textarea name="content-lessonq" id="content-lessonq" placeholder="Введите текст урока"></textarea>
                    <script>CKEDITOR.replace( 'content-lesson' );</script>
                    <div class="states">
                        <input type="submit" name="save-lq" class="save-lq" value="Сохранить">
                        <input type="text" style="width: 110px; margin-top: 2%;" id="status-lq" name="status-lq" value="черновик" readonly>
                        <select name="tag-lq" id="tag-lq" class="select-apply">
                            <?php $tags = get_tags(); ?>
                            <?php foreach ($tags as $tag) : ?>
                                <option value="<?=$tag['id']?>"><?=$tag['tag']?></option>
                            <?php endforeach; ?>
                        </select>
                        <!-- <input type="text" style="width: 130px; margin-top: 2%;" id="date" name="date" value="<?php print date("d.m.Y"); ?>"> -->
                    </div>
                </div>
            </form> 
        </div>
    </div>
</body>
</html>