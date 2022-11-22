<?php
    if(isset($_POST['submit'])) {

        include_once('config.php');

        $nome = isset($_POST['nome'])?$_POST['nome']:'N/A';
        $email = isset($_POST['email'])?$_POST['email']:'N/A';
        $senha = isset($_POST['senha'])?$_POST['senha']:'N/A';
        $telefone = isset($_POST['telefone'])?$_POST['telefone']:'N/A';
        $sexo = isset($_POST['sexo'])?$_POST['sexo']:'N/A';
        $data_nasc = isset($_POST['data_nascimento'])?$_POST['data_nascimento']:'N/A';
        $cidade = isset($_POST['cidade'])?$_POST['cidade']:'N/A';
        $estado = isset($_POST['estado'])?$_POST['estado']:'N/A';
        $hobbie = isset($_POST['hobbie'])?$_POST['hobbie']:'N/A';

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, telefone, sexo, data_nasc, cidade, estado, hobbie) VALUES ('$nome', '$email','$senha', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$hobbie')");

        header('Location: login.php');

    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário | SFX</title>

        <style>

            body{
                height: 100%;
            }
            h2{
                color: dodgerblue;
                text-align: center;
            }

            .box{
                color: white;
                margin: 0 auto;
                background-color: rgba(0, 0, 0, 0.8);
                padding: 15px;
                border: 6px solid dodgerblue;
                border-radius: 15px;
                width: 25%;
                margin-top: 20px;
            }
            .inputBox{
                position: relative;
            }

            .inputUser{
                background: none;
                border: none;
                border-bottom: 1px solid white;
                outline: none;
                color: white;
                font-size: 15px;
                width: 100%;
                letter-spacing: 2px;
            }

            .labelInput{
                position: absolute;
                top: 0px;
                left: 0px;
                pointer-events: none;
                transition: .5s;
            }

            .inputUser:focus ~ .labelInput,.inputUser:valid ~ .labelInput{
                top: -20px;
                font-size: 12px;
                color: dodgerblue;
            }

            #data_nascimento{
                border: none;
                padding: 6px;
                border-radius: 10px;
                outline: none;
                font-size: 15px;
            }

            #submit{
                background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
                width: 100%;
                border: none;
                padding: 15px;
                color: white;
                font-size: 15px;
                cursor: pointer;
                border-radius: 10px;
                font-weight: bold;
            }

            #submit:hover{
                background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
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

        <div class="box">
            <form action="formulario.php" method="POST">
                <h2>Cadastrar | Pessoa</h2>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>      
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio"  class="form-check-input"   id="feminino" name="sexo" value="feminino" >
                <label class="form-check-label" for="feminino"> Feminino</label>
                <br>
                <input type="radio" class="form-check-input"   id="masculino" name="sexo" value="masculino" >
                <label class="form-check-label" for="masculino"> Masculino</label>
                <br>               
                    <label for="data_nascimento"><b>Data de Nascimento</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>      
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>  
                    <label for="cidade" class="labelInput">Cidade</label>   
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>  
                    <label for="estado" class="labelInput">Estado</label>   
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="hobbie" id="hobbie" class="inputUser" required>  
                    <label for="hobbie" class="labelInput">Hobbie Favorito</label>   
                </div>
                <br>
                <input type="submit" name="submit" id="submit" >

        
            </form>
        </div>
        
    </body>
</html>