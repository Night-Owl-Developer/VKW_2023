<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: /');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    <div class="header">
        <a href="/index.html"><img src="/image/logotype/logotype.png" class="logotype" alt="logotype site"></a>
        <a href="profile.php"><img src="/image/icons/admin.png" class="adminlog" alt="admin"></a>
    </div>
    <div class="container-main">
        <div class="sidenav">
            <a href="admin_main.php">Главная</a>
            <a href="admin_articles.php">Статьи</a>
            <a href="admin_lessons.php">Уроки</a>
        </div>
        <div class="main">
            <!-- Профиль -->
            <br><br><br><br><br><br><br><br>
            <p>lf gjxtve yt dsdjlbnc&</p>

            <form>
                <a class="active" href="contents.php">Главная страница</a>
                <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
                <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
                <a href="#"><?= $_SESSION['user']['email'] ?></a>
                <a href="vendor/logout.php" class="logout">Выход</a>
            </form>
        </div>
    </div>
</body>
</html>