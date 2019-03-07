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

<!--    <style type="text/css">
      table {
        margin-bottom: 70px;
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
    </style> -->

<style type="text/css">
  table {
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 18px;
    max-width: 100%;
    width: 100%;
    text-align: center;
    border-collapse: collapse;
    border-top: 7px solid #9baff1;
    border-bottom: 7px solid #9baff1;
    margin-bottom: 70px;
  }
  th {
    font-size: 13px;
    font-weight: normal;
    background: #e8edff;
    border-right: 1px solid #9baff1;
    border-left: 1px solid #9baff1;
    color: #039;
    padding: 8px;
    text-align: center;
  }
  td {
    background: #e8edff;
    border-right: 1px solid #aabcfe;
    border-left: 1px solid #aabcfe;
    color: #669;
    padding: 8px;
    text-align: center;
  }
</style>

</head>
<body>

  <?php include ("shablon/header.php");?>

<!-- ВЫГРУЗКА ДАННЫХ ИЗ БД -->
<div class="container">
  <div class="row centered">
  <h1>Наши товары</h1>
  <h4>Процессоры</h4>
  <br>
<?php
require_once 'operations/connection.php'; // подключаем скрипт

$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

$query ="SELECT * FROM tovars WHERE category = 'proc'";

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

<div class="container">
  <div class="row centered">
  <h4>Видеокарты</h4>
  <br>
<?php
require_once 'operations/connection.php'; // подключаем скрипт

$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

$query ="SELECT * FROM tovars WHERE category = 'videocard'";

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

<div class="container">
  <div class="row centered">
  <h4>Ноутбуки</h4>
  <br>
<?php
require_once 'operations/connection.php'; // подключаем скрипт

$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

$query ="SELECT * FROM tovars WHERE category = 'notebook'";

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

  <?php include ("shablon/footer.php");?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
