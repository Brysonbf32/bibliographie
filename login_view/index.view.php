
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
  <script type="text/javascript" src="assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <title>Login Page</title>
    <style>
        .login_input{
            width: 100%!important;
            padding: 7px!important;
            box-shadow: white!important;
            border-color: white!important;
            background-color: white;
            color: #071C31!important;
            border: 1px solid black!important;
            font-weight:bold;
            
        }
        .login_input:focus{
            border: 0px solid none!important;
            border: none!important;
        }
        .log_tit{
            color: white;
            font-size: 25px;
        }
        .rowall{
            background-color: #071C31;
        }
        .container_log{
            padding-top: 8%;
        }
        .btn_login{
            background-color: white;
            border: none!important;
            font-weight:bold;
            color: #757575;
            padding: 10px;
            font-size: 15px;
            width:20%;
        }
        .btn_login:hover{
            background-color: #757575;
            border: none!important;
            font-weight:bold;
            color: white;
            padding: 7px;
            font-size: 15px;
            transition:0.3s;
        }
        .cont1{
            justify-content:center!important;
            text-align: center!important;
        }
        .section1{
            background-color: red;
        }
        .nonreconurole{
            color:red!important;
        }
    </style>
</head>
<body>
<section class="py-3">
    <div class="container container_log">
        <div class="row">
            <div class="col-12 col-lg-3">
            </div>
            <div class="col-12 col-lg-6 rowall py-5">
                <p class="nonreconurole"><?=$utilinonreco?></p>
            <h2 class="log_tit py-3" align="center">Login</h2>
                <form method="POST">
                    <div class="input1">
                            <input class="form-control login_input" name="us_mail" type="text" Placeholder="E-mail">
                    </div>
                    <div class="input1 py-2">
                            <input class="form-control login_input" name="us_password" type="password"  Placeholder="Mot De Passe">
                    </div>
                    <div class="buttonlog py-3" align="center">
                            <button class="btn btn_login" name="login" type="submit">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-3">
            </div>
        </div>
    </div>
</section>
</body>
</html>