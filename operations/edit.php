<!-- ФАЙЛ НЕ ИСПОЛЬЗУЕТСЯ -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));

// если запрос POST
if(isset($_POST['name']) && isset($_POST['company']) && isset($_POST['characteristics']) && isset($_POST['id'])  && isset($_POST['category'])  && isset($_POST['price'])){

    $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
    $categoty = htmlentities(mysqli_real_escape_string($link, $_POST['category']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $company = htmlentities(mysqli_real_escape_string($link, $_POST['company']));
    $characteristics = htmlentities(mysqli_real_escape_string($link, $_POST['characteristics']));
    $price = htmlentities(mysqli_real_escape_string($link, $_POST['price']));

    $query ="UPDATE tovars SET category='$category', name='$name', company='$company', characteristics='$characteristics', name='$price' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
}

// если запрос GET
if(isset($_GET['id']))
{
    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));

    // создание строки запроса
    $query ="SELECT * FROM tovars WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    //если в запросе более нуля строк
    if($result && mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $category = $row[1];
        $name = $row[2];
        $company = $row[3];
        $characteristics = $row[4];
        $price = $row[5];

        echo "<h2>Изменить модель</h2>
            <form method='POST'>
            <input type='hidden' name='id' value='$id' />
            <p>Введите категорию:<br>
            <input type='text' category='category' value='$category' /></p>
            <p>Введите модель:<br>
            <input type='text' name='name' value='$name' /></p>
            <p>Производитель: <br>
            <input type='text' name='company' value='$company' /></p>
            <p>Характеристики: <br>
            <input type='text' name='characteristics' value='$characteristics' /></p>
            <p>Введите цену:<br>
            <input type='number' price='price' value='$price' /></p>
            <input type='submit' value='Сохранить'>
            </form>";

        mysqli_free_result($result);
    }
}
// закрываем подключение
mysqli_close($link);
?>
</body>
</html>
