<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CompTech</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

<?php include ("shablon/header.php");?>

<?php
# Если id передан - записываем в $article статью или null, если статьи с таким id нет
if(isset($_GET['id']))
    $current_article = $articles[$_GET['id']] ?? null;
# Если id не передан - значит это главная страница, можем показать страницу с id = 0
else
    $current_article = $articles[0];
?>

<div class="container">
    <div class="row centered">
        <!-- Выводим меню -->
        <?php foreach($articles as $id => $article): ?>
            <a href="?id=<?= $id ?>"><?= $article['title'] ?></a>
        <?php endforeach; ?>
    </div>
</div>

<!-- Показываем страницу, либо ошибку -->
<?php if($current_article): ?>
    <div class="container"
         <div class="row centered"
            <h1>
                <?= $current_article['title'] ?>
            </h1>
            <div>
                <?= $current_article['content'] ?>
            </div>
        </div>
    </div>
<?php else: ?>
    <h1>Ошибка 404: страница не найдена</h1>
<?php endif; ?>

<?php include ("shablon/footer.php");?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>


