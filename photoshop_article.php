<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <img src="image/header/main_fon.png" alt="fon-h" class="fon">
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
            <img src="image/header/photoshop_abstraction.png" alt="abstraction" class="abstr">
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
            <?php require_once 'functions.php';?>

            <center><img src="<?=$articles['image']?>" alt="zastavka" class="zastavka"></center> 

                <h3><?=$articles['title']?></h3>
                <div style="font-size: 16pt;">
                    <?=$articles['content']?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <img src="image/footer/main_footer.png" alt="main footer" class="fon">
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