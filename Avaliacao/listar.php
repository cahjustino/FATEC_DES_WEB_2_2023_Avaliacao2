<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Candidatos</title>
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
            right: 35%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        .box2{
            color: white;
            position: absolute;
            top: 50%;
            left: 67%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        .box3{
            color: white;
            position: absolute;
            top: 50%;
            left: 88%;
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
            position:absolute;
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
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
        <a style="margin-left:180px" href="index.php" class="btn btn-info">VOLTAR A PÁGINA DE CADASTRO</a>
    </div>
    <br>
    <hr>
    <div class="box">
        <h2>ALTERAR DADOS</h2><br>

        <form action="CRUD/update_pdo.php" method="post">
            <div class="inputUser">
                <div class="inputUser">
                    <label> ID DO PARTICIPANTE</label>
                    <input type="number" name="id" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="cad">
                    <div class="inputUser">
                        <label>Nome:</label>
                        <input type="text" name="nome" class="form-control" value="">
                        <span class="help-block"></span>
                    </div>
                    <div class="inputUser">
                        <label>Rg ou CPF:</label>
                        <input type="text" name="documento" class="form-control" value="">
                        <span class="help-block"></span>
                    </div>
                    <div class="inputUser">
                        <label>Telefone</label>
                        <input type="text" name="telefone" class="form-control" value="">
                        <span class="help-block"></span>
                    </div>
                    <div class="inputUser">
                        <label>Estudou em escola pública?</label>
                        <input class="form-check-input" type="radio" name="escola" id="escola1" value="sim" checked>
                        <label class="form-check-label" for="escola">
                            SIM
                        </label>
                        <input class="form-check-input" type="radio" name="escola" id="escola2" value="nao">
                        <label class="form-check-label" for="escola">
                            NÃO
                        </label>
                    </div>
                </div><br>
                <div class="inputUser">
                    <input type="submit" class="btn btn-warning" value="ENVIAR AS ALTERAÇÕES">
                </div>
            </div>
    </div>
    </form>
    <br>
    <hr>
    <div class="box2">
        <h2>DELETAR ALUNO CADASTRADO</h2><br>
        <form action="CRUD/delete_pdo.php" method="post">
            <div class="form-group">
                <div class="form-group">
                    <label> ID do cadastro á deletar?</label>
                    <input type="text" name="id" class="form-control" value="">
                    <span class="help-block"></span>
                </div label-input">
                    <input type="submit" class="btn btn-danger" value="DELETAR">
                </div>
            </div>
            <br>
            <hr>
            <center>
                <div class="box3">
                    <h2>ALUNOS JÁ CADASTRADOS</h2><br>
                    <div class="cad">
                        <section style="text-align:center">
                            <?php
        require_once('crud/select_pdo.php');
        ?>
                        </section>
                    </div>
                </div>
            </center><br>
            <hr>
</body>

</html>