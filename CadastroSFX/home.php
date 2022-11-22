<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | SFX</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <style>

            h1{
                text-align: center;
                position: absolute;
                top: 25%;
                left: 50%;
                transform: translate(-50%,-80%);
            }
            
            .box{
                font-size: 18px;
                width: 25%;
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                background-color: rgba(0, 0, 0, 0.2);
                padding: 40px;
                border-radius: 10px;
            }

            a{
                width: 100%;
            }

            i{
                font-weight: bold;
            }

            b{
                color: red;
            }

       
        </style>

    </head>
    <body>
        <h1>SFX Sistemas</h1>
        <div class="box">
            <a href="login.php" class="btn btn-primary btn-md">Login</a>
            <br><br>
            <span><i>*Obs:</i> Caso não possuir uma conta, favor clicar em: <br><br> <b><a href="formulario.php" class="btn btn-danger">Cadastre-se</a></b></span>
        </div> 
    </body>
</html>