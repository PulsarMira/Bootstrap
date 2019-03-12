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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  #vh{
    padding-top: 70px;
    padding-bottom: 70px;
  }

  a:hover,a:focus{
   outline: none;
   text-decoration: none;
  }
  .tab{
   background: #200122;
   background: -webkit-linear-gradient(to bottom, #6f0000, #200122);
   background: linear-gradient(to bottom, #6f0000, #200122);
   padding: 40px 50px;
   position: relative;
  }
  .tab:before{
   content: "";
   width: 100%;
   height: 100%;
   display: block;
   position: absolute;
   top: 0;
   left: 0;
   background: linear-gradient(#2e3a6a,#2f0b45);
   opacity: 0.85;
  }
  .tab .nav-tabs{
   border-bottom: none;
   padding: 0 20px;
   position: relative;
  }
  .tab .nav-tabs li{ margin: 0 30px 0 0; }
  .tab .nav-tabs li a{
   font-size: 18px;
   color: #fff;
   border-radius: 0;
   text-transform: uppercase;
   background: transparent;
   padding: 0;
   margin-right: 0;
   border: none;
   border-bottom: 2px solid transparent;
   opacity: 0.5;
   position: relative;
   transition: all 0.5s ease 0s;
  }
  .tab .nav-tabs li a:hover{ background: transparent; }
  .tab .nav-tabs li.active a,
  .tab .nav-tabs li.active a:focus,
  .tab .nav-tabs li.active a:hover{
   border: none;
   background: transparent;
   opacity: 1;
   border-bottom: 2px solid #eec111;
   color: #fff;
  }
  .tab .tab-content{
   padding: 20px 0 0 0;
   margin-top: 40px;
   background: transparent;
   z-index: 1;
   position: relative;
  }
  .form-bg{ background: #ddd; }
  .form-horizontal .form-group{
   margin: 0 0 15px 0;
   position: relative;
  }
  .form-horizontal .form-control{
   height: 40px;
   background: rgba(255,255,255,0.2);
   border: none;
   border-radius: 20px;
   box-shadow: none;
   padding: 0 20px;
   font-size: 14px;
   font-weight: bold;
   color: #fff;
   transition: all 0.3s ease 0s;
  }
  .form-horizontal .form-control:focus{
   box-shadow: none;
   outline: 0 none;
  }
  .form-horizontal .form-group label{
   padding: 0 20px;
   color: #7f8291;
   text-transform: capitalize;
   margin-bottom: 10px;
  }
  .form-horizontal .main-checkbox{
   width: 20px;
   height: 20px;
   background: #eec111;
   float: left;
   margin: 5px 0 0 20px;
   border: 1px solid #eec111;
   position: relative;
  }
  .form-horizontal .main-checkbox label{
   width: 20px;
   height: 20px;
   position: absolute;
   top: 0;
   left: 0;
   cursor: pointer;
  }
  .form-horizontal .main-checkbox label:after{
   content: "";
   width: 10px;
   height: 5px;
   position: absolute;
   top: 5px;
   left: 4px;
   border: 3px solid #fff;
   border-top: none;
   border-right: none;
   background: transparent;
   opacity: 0;
   -webkit-transform: rotate(-45deg);
   transform: rotate(-45deg);
  }
  .form-horizontal .main-checkbox input[type=checkbox]{ visibility: hidden; }
  .form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{ opacity: 1; }
  .form-horizontal .text{
   float: left;
   font-size: 14px;
   font-weight: bold;
   color: #fff;
   margin-left: 7px;
   line-height: 20px;
   padding-top: 5px;
   text-transform: capitalize;
  }
  .form-horizontal .btn{
   width: 100%;
   background: #eec111;
   padding: 10px 20px;
   border: none;
   font-size: 14px;
   font-weight: bold;
   color: #fff;
   border-radius: 20px;
   text-transform: uppercase;
   margin: 20px 0 30px 0;
  }
  .form-horizontal .btn:focus{
   background: #eec111;
   color: #fff;
   outline: none;
   box-shadow: none;
  }
  .form-horizontal .forgot-pass{
   border-top: 1px solid #615f6c;
   margin: 0;
   text-align: center;
  }
  .form-horizontal .forgot-pass .btn{
   width: auto;
   background: transparent;
   margin: 30px 0 0 0;
   color: #615f6c;
   text-transform: capitalize;
   transition: all 0.3s ease 0s;
  }
  .form-horizontal .forgot-pass .btn:hover{ color: #eec111; }
  @media only screen and (max-width: 479px){
   .tab{ padding: 40px 20px; }
  }
  </style>

  <div class="container" id="vh">
     <div class="row">
       <div class="col-md-offset-3 col-md-6">

         <div class="tab" role="tabpanel">
           <!-- Nav tabs -->
           <ul class="nav nav-tabs" role="tablist">
             <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Войти</a></li>
             <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Зарегистрироваться</a></li>
           </ul>
           <!-- Tab panes -->
           <div class="tab-content tabs">
             <div role="tabpanel" class="tab-pane fade in active" id="Section1">
               <form class="form-horizontal">
                 <div class="form-group">
                   <label for="exampleInputEmail1">Имя пользователя</label>
                   <input type="email" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                   <label for="exampleInputPassword1">Пароль</label>
                   <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                   <div class="main-checkbox">
                   <input value="None" id="checkbox1" name="check" type="checkbox">
                   <label for="checkbox1"></label>
                   </div>
                   <span class="text">Запомнить меня</span>
                  </div>
                  <div class="form-group">
                   <button type="submit" class="btn btn-default">Войти</button>
                  </div>
                  <div class="form-group forgot-pass">
                   <button type="submit" class="btn btn-default">Забыли пароль?</button>
                  </div>
                </form>
             </div>
             <div role="tabpanel" class="tab-pane fade" id="Section2">
               <form class="form-horizontal">
                 <div class="form-group">
                   <label for="exampleInputEmail1">Имя</label>
                  <input type="text" class="form-control" id="exampleInputEmail1">
                 </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1">Фамилия</label>
                  <input type="text" class="form-control" id="exampleInputEmail1">
                 </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1">
                 </div>
                 <div class="form-group">
                   <label for="exampleInputPassword1">Пароль</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                 </div>
                 <div class="form-group">
                   <button type="submit" class="btn btn-default">Зарегистрироваться</button>
                 </div>
               </form>
             </div>
           </div>
         </div>

      </div><!-- /.col-md-offset-3 col-md-6 -->
    </div><!-- /.row -->
  </div><!-- /.container -->

  <?php include ("shablon/footer.php");?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
