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
</head>
<body>

  <?php include ("shablon/header.php");?>

<div class="form">
    <div class="container">
        <div class="row centered" id="rg">
            <h4>Вход</h4>
        </div>
        <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Почта:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Введите почтовый ящик">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Пароль:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" placeholder="Введите пароль">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox"> Запомнить</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default btn-success">Вход</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="form" id="r2">
    <div class="container">
        <div class="row centered" id="rg2">
            <h4>Регистрация</h4>
        </div>
        <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email2">Почта:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email2" placeholder="Введите почтовый ящик">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd2">Пароль:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd2" placeholder="Создайте пароль">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="txt">Никнейм:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txt" placeholder="Придумайте никнейм">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="tel">Телефон:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="tel" placeholder="Введите пароль">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="txt2">Адрес:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txt2" placeholder="Введите свой адрес">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox"> Даю согласие на обработку персональных данных</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox"> Согласен получать рассылку на почтовый ящик о скидках, акциях и
                            персональных предложениях</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default btn-success">Зарегистрироваться</button>
                </div>
            </div>
        </form>
    </div>
</div>

  <?php include ("shablon/footer.php");?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
