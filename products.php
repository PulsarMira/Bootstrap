<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CompTech</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <style type="text/css">
      table {
        margin: 8px;
      }

      th {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        background: #666;
        color: #fff;
        padding: 2px 6px;
        border-collapse: separate;
        border: 1px solid #000;
        text-align: center;
      }

      td {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        border: 1px solid #DDD;
        text-align: center;
      }
    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">C<i class="fa fa-circle"></i>MPTECH</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Главная</a></li>
                <li><a href="price.html">Услуги</a></li>
                <li class="active"><a href="products.html">Товары</a></li>
                <li><a href="svyaz.html">Обратная связь</a></li>
                <li><a href="vhod.html">Вход и Регистрация</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>COMPTECH is awesome!</h1>
                <h2>Техника на COMPTECH лучшая в мире</h2>
            </div>
        </div>
    </div>
</div>

<!-- ВЫГРУЗКА ДАННЫХ ИЗ БД -->
<div id="pr">
<div class="container">
  <div class="row centered">
  <h4>Наши товары</h4>
  <br>
<?php
require_once 'connection.php'; // подключаем скрипт

$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

$query ="SELECT * FROM tovars";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table>
      <tr>
        <th>Id</th>
        <th>Категория</th>
        <th>Модель</th>
        <th>Производитель</th>
        <th>Характеристики</th>
        <th>Цена, руб.</th>
        </tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

    // очищаем результат
    mysqli_free_result($result);
}

mysqli_close($link);
?>
</div>
</div>
</div>

<div id="f">
    <div class="container">
        <div class="row centered">
            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
            <a href="https://vk.com"><i class="fa fa-vk"></i></a>
            <a href="https://youtube.com"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
