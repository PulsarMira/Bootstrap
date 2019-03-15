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


  <div class="container">
    <h2>Каталог</h2>
    <p>В данном разделе вы можете просмотреть все товары доступные на данный момент на нашем сайте.</p>

    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home">Процессоры</a></li>
      <li><a data-toggle="tab" href="#menu1">Видеокарты</a></li>
      <li><a data-toggle="tab" href="#menu2">Ноутбуки</a></li>
      <li><a data-toggle="tab" href="#menu3">Оперативная память</a></li>
      <li><a data-toggle="tab" href="#menu4">Материнские платы</a></li>
      <li><a data-toggle="tab" href="#menu5">Системы охлаждения</a></li>
    </ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <h3>ПРОЦЕССОРЫ</h3>
        <p><div class="container">
          <div class="row centered">
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
      </p>
      </div>

      <div id="menu1" class="tab-pane fade">
        <h3>ВИДЕОКАРТЫ</h3>
        <p><div class="container">
          <div class="row centered">
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
        </div></p>
      </div>

      <div id="menu2" class="tab-pane fade">
        <h3>НОУТБУКИ</h3>
        <p><div class="container">
          <div class="row centered">
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
      </p>
      </div>
      <div id="menu3" class="tab-pane fade">
    <h3>Оперативная память</h3>
    <p><div class="container">
      <div class="row centered">
    <?php
    require_once 'operations/connection.php'; // подключаем скрипт

    $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));

    $query ="SELECT * FROM tovars WHERE category = 'ozu'";

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
    </div></p>
  </div>

  <div id="menu4" class="tab-pane fade">
    <h3>Материнские платы</h3>
    <p><div class="container">
      <div class="row centered">
    <?php
    require_once 'operations/connection.php'; // подключаем скрипт

    $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));

    $query ="SELECT * FROM tovars WHERE category = 'mat'";

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
    </div></p>
  </div>

  <div id="menu5" class="tab-pane fade">
    <h3>Системы охлаждения</h3>
    <p><div class="container">
      <div class="row centered">
    <?php
    require_once 'operations/connection.php'; // подключаем скрипт

    $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));

    $query ="SELECT * FROM tovars WHERE category = 'cold'";

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
    </div></p>
  </div>
    </div>
  </div>

  <?php include ("shablon/footer.php");?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
