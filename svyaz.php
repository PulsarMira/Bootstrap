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

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row centered">
            <p class="col-sm-12 col-lg-12">
                <h2 class="h2">
                    Свяжитесь с нами
            <p>
                <small>Не стесняйтесь обращаться к нам напрямую. Наша команда ответит вам в течении нескольких часов
                </small>
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Никнейм</label>
                                <input type="text" class="form-control" id="name" placeholder="Введите никнейм"
                                       required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Почтовый адрес</label>
                                <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                    <input type="email" class="form-control" id="email"
                                           placeholder="Введите свой почтовый адрес" required="required"/></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                    Предмет сообщения</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Выберите:</option>
                                    <option value="service">Сообщение по поводу услуг</option>
                                    <option value="suggestions">Сообщение по поводу сборок и комплектующих</option>
                                    <option value="product">Сообщение по поводу сайта</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Сообщение</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25"
                                          required="required"
                                          placeholder="Введите текст сообщения"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Отправить
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <legend><span class="glyphicon glyphicon-globe"></span> Наши контактные данные</legend>
                <address>
                    <strong class="fa fa-address-book-o"> Адрес:</strong><br>
                    Россия, Орел<br>
                    ул. Комсомольская, д.254<br>
                    <br>
                    <strong class="fa fa-phone"> Телефон:</strong><br>
                    +7 (950) 456-7890
                </address>
                <address>
                    <strong class="fa fa-envelope-o"> Наш почтовый адрес:</strong><br>
                    <a href="mailto:#">comptech@gmail.com</a>
                </address>
            </form>
        </div>
    </div>
</div>

  <?php include ("shablon/footer.php");?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
