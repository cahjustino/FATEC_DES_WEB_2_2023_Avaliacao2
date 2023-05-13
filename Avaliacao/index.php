<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadatro Vestibular</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
       body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
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
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
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
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>

<body>
    <br>
    <hr>
    <div class="reader">
        <a style="margin-left:180px" href="listar.php" class="btn btn-info">ADMINISTRAÇÃO</a>
    </div>
    <br>
    <hr>

    <div class="box">
        <h2>CADASTRO VESTIBULAR FATEC</h2><br>

        <form action="CRUD/insert_pdo.php" method="post">
            <div class="form-group">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="nome" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Rg ou CPF:</label>
                    <input type="text" name="documento" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Você estudou em escola pública?</label>
                    <br>
                    <input class="form-check-input" type="radio" name="escola" id="escola1" value="sim" checked>
                    <label class="form-check-label" for="escola">
                        SIM
                    </label>
                    <input class="form-check-input" type="radio" name="escola" id="escola2" value="nao">
                    <label class="form-check-label" for="escola">
                        NÃO
                    </label>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="ENVIAR">
            </div>
    </div>
    </form>
    </div>
    <br>
    <hr>
</body>

</html>