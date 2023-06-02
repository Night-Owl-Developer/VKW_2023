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
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="ckeditor\ckeditor.js"></script>
    <title>Статьи по Figma</title>
</head>
<body>
    <div class="nav">
        <img src="image/header/figma_fon.png" alt="fon-h" class="fon">
            <div class="row nav-content">
                <nav class="navbar navbar-expand-lg" style="margin-left: 5%;">
                    <div class="container-fluid" style="margin-top: -20px;">
                        <a class="navbar-brand" href="#"><img src="image/logotype/logotype.png" alt="логотип проекта" class="logotype"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20pt; color:#000; font-weight: bold;">Figma</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="figma_editor.php">О редакторе</a></li>
                                        <li><a class="dropdown-item" href="figma_articles.php">Статьи</a></li>
                                        <li><a class="dropdown-item" href="figma_lessons.php">Уроки</a></li>
                                    </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20pt; color:#000; font-weight: bold;">illustrator</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="illustator_editor.php">О редакторе</a></li>
                                        <li><a class="dropdown-item" href="illustrator_articles.php">Статьи</a></li>
                                        <li><a class="dropdown-item" href="illustrator_lessons.php">Уроки</a></li>
                                    </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20pt; color:#000; font-weight: bold;">photoshop</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="photoshop_editor.php">О редакторе</a></li>
                                        <li><a class="dropdown-item" href="photoshop_articles.php">Статьи</a></li>
                                        <li><a class="dropdown-item" href="photoshop_lessons.php">Уроки</a></li>
                                    </ul>
                            </li>   
                        </ul>
                        </div>
                    </div>
                </nav>
                <div class="privetstvie">
                    <p>Добро пожаловать к нам!</p>
                    <p>Мы научим тебя работать в трендовых графических редакторах</p>
                </div>
                <div class="tags">
                    <p class="f">#figma</p>
                    <p class="i">#illustrator</p>
                    <p class="p">#photoshop</p>
                </div>
            </div>
            <img src="image/header/figma_abstraction.png" alt="abstraction" class="abstr">
    </div>

    <div class="content">
        <div class="editors">
        <div class="container">
            <div class="row">
                <?php 
                    require_once 'functions.php';
                    $posts = get_lessons_figma();
                ?>
                <?php foreach ($posts as $post) : ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="editor-card" style="height: auto;">
                                <div class="logotype-link">
                                    <a href=""><img src="<?=$post['image']?>" alt="logotype photoshop"></a>
                                </div>
                                <div class="logotype-description">
                                    <h3 style="font-size: 12pt;"><?=$post['title']?></h3>
                                    <div class="zagolovok"><p class="card-text"><?=$post['content']?></p></div>
                                    <form action="figma_lesson.php" method="post">
                                        <button type="submit" class="f-btn btn btn-lg" style="background-color: #A259FF;" name="figma-read" id="">Читать далее</button>
                                        <input type="text" name="id-a" id="id-a" value="<?=$post['id']?>" style="display: none;">
                                    </form>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </div>

    <div class="footer">
        <img src="image/footer/figma_footer.png" alt="main footer" class="fon">
        <div class="footer-content">
            <div class="f-cont">
                <p>Контакты</p>
                <p>почта:</p>
            </div>
            <div class="f-cont">
                <p>Найди нас здесь</p>
                <div class="col">
                    <img src="image/icons/vk.png" alt="vk">
                    <img src="image/icons/pinterest.png" alt="pinterest">
                    <img src="image/icons/telegram.png" alt="telegram">
                </div>
            </div>
        </div>
        <div class="developer">
            <p><a href="https://github.com/Night-Owl-Developer">By Night_Owl</a></p>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>