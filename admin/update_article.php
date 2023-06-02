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
        <link rel="stylesheet" href="/css/fonts.css">
        <link rel="stylesheet" href="/css/admin.css">
        <script src="/ckeditor\ckeditor.js"></script>
    <title>Add Article Admin Beta</title>
</head>
<body>
    <?php require_once 'functions.php'; 
    
    // $ups = get_article_in_table();
    
    ?>


    <div class="header">
        <a href="/index.html"><img src="/image/logotype/logotype.png" class="logotype" alt="logotype site"></a>
        <a href="profile.php"><img src="/image/icons/admin.png" class="adminlog" alt="admin"></a>
    </div>

    <div class="sidenav">
        <a href="admin_main.php">Главная</a>
        <a href="admin_articles.php">Статьи</a>
        <a href="admin_lessons.php" class="active-page">Уроки</a>
    </div>

    <div class="container" style="margin-top: 130px; margin-left:13%;">
        <form action="" method="post">
            <div class="add-new">
                <h4>Обновить статью</h4>
                <input type="submit" name="save-a" class="save" id="save" value="Сохранить" style="margin-left: 3%;">
                <!-- <input type="submit" name="apply-a" class="apply" id="apply" value="Опубликовать"> -->
            </div>
            <input type="text" class="inputs" name="title" id="title" placeholder="Введите заголовок урока" value="<?=$ups['title']?>">
            <!-- <textarea name="title" id="title" class="inputs"></textarea> -->
            <div class="add-new">
                <input type="file" name="file" id="file" value="<?=$ups['image']?>">
                <!-- <input type="date" name="date" id="date"> -->
                <h5>Тег</h5>
                <!-- заполнение select тегами статей -->
                <select name="tag" id="tag" class="select-apply">
                    <?php $tags = get_tags();?>
                    <?php foreach ($tags as $tag) : ?>
                        <option value="<?=$tag['id']?>"><?=$tag['tag']?></option>
                    <?php endforeach; ?>
                </select>

                <h5>Статус</h5>
                <!-- заполнение select статусами статей -->
                <select name="status" id="status" class="select-apply">
                    <?php $statuses = get_statuses(); ?>
                    <?php foreach ($statuses as $status) : ?>
                        <option value="<?=$status['id']?>"><?=$status['status']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="content-article">
                <h4>Текст статьи</h4>
                <textarea name="content-article" id="content-article" placeholder="Введите текст урока"><?=$ups['content']?></textarea>
                <script>CKEDITOR.replace( 'content-article' );</script>
            </div>
        </form>
    </div>
</body>
</html>