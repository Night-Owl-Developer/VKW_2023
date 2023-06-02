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
    <title>Lessons Admin Beta</title>
</head>
<body>
    <?php 
        require_once 'functions.php'; 
        require_once 'modal.php';
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
        <div class="add-new">
            <h4>Уроки</h4>
            <a href="add_lesson.php" style="text-decoration: none;" id="add">Добавить новый</a>
        </div>

        
            <!-- таблица с информацией из бд -->
            <form action="" method="post">
            <div class="container" style="width: 96%; margin-left:2%;">
                <div class="table-responsive">
                    <table id="lessons" class="table table-bordered table-condensed table-hover align-middle table-sm" style="width: 98%; margin-left:2%;">
                        <thead class="table-dark">
                            <tr>
                                <th style="width: 75px;"></th>
                                <th style="width: 100px; font-size: 12pt;">Заставка</th>
                                <th style="width: 340px; font-size: 12pt;">Заголовок</th>
                                <th style="width: 340px; font-size: 12pt;">Контент</th>
                                <th style="width: 60px; font-size: 12pt;">Тег</th>
                                <th style="width: 100px; font-size: 12pt;">Статус</th>            				
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tables = get_table_article(); ?>
                        </tbody>
                    </table>
                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            $('#lessons').DataTable();
                        });
                    </script>
                </div>
            </div>
            <br><br><br>     
            </form>
    </div>
</body>
</html>