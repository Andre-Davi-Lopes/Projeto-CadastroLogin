<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login | SFX</title>
        <style>

            h1{
                letter-spacing: 4px;        
            }
            

            div{
                background-color: rgba(0, 0, 0, 0.2);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 80px;
                border-radius: 15px;
                color: black;
            }

            input{
                letter-spacing: 2px;
                padding: 15px;
                border: none;
                outline: none;
                font-size: 15px;
            }

            .envio{
                letter-spacing: 2px;
               background-color: dodgerblue;
               border: none;
               padding: 15px;
               width: 100%;
               border-radius: 10px;
               color: white;
               font-size: 15px; 
            }

            .envio:hover{
                background-color: deepskyblue;
                cursor:pointer;
            }

            a{
                width: 8%;
                margin-top: 20px;
                margin-left: 20px; 
            }


        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    </head>
    <body>
    <a href="home.php" class="btn btn-danger">Voltar</a>

        <div>
            <h1>Login</h1>
            <form action="verificaUsuario.php" method="POST">
                <br>
                <input type="text" name="email" placeholder="E-mail...">
                <br>
                <br>
                <input type="password" name="senha" placeholder="password...">
                <br>
                <br>
                <input class="envio" type="submit" name="submit" value="Login">       
            </form>
        </div>

        
    </body>
</html>