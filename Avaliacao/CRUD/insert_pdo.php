<?php

require_once('dados_banco.php');

function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['nome']) and validar_post($_POST['documento']) 
and validar_post($_POST['telefone'])and validar_post($_POST['escola'])){

    $nome = $_POST['nome'];
    $documento= $_POST['documento'];
    $telefone = $_POST['telefone'];
    $escola = $_POST['escola'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
      $sql = "INSERT INTO cadastro (nome,documento,telefone,escola) 
      VALUES ('$nome','$documento','$telefone','$escola.')";
    // use exec() because no results are returned
    $conn->exec($sql);

    header("location: ../index.php");
    // echo "New record created successfully";
    }
catch(PDOException $e)
    {
        // header("location: ../index.php");
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;


}
?>