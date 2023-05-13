<?php

require_once('dados_banco.php');

function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['id']) and validar_post($_POST['nome']) and validar_post($_POST['documento']) 
and validar_post($_POST['telefone'])and validar_post($_POST['escola'])){

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $documento= $_POST['documento'];
    $telefone = $_POST['telefone'];
    $escola = $_POST['escola'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE cadastro SET nome = '$nome', documento = '$documento',
    telefone = '$telefone',escola = '$escola' 
    WHERE id = '$id'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    header("location: ../listar.php");
    // echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
?>
