<?php
    require_once("conecta.php");

    if($_POST["nome"] && $_POST["senha"] &&  $_POST["email"] &&  $_POST["telefone"]){

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $query = $conecta->prepare("INSERT INTO tb_aengus(nome,senha,email,telefone) VALUES (:NOME, :SENHA, :EMAIL, :TELEFONE)");

        
        $query->execute(array(
            ':NOME' => $nome,
            ':SENHA' => $senha,
            ':EMAIL' => $email,
            ':TELEFONE' => $telefone
        ));
        echo"";
        
        
    }else {
        header("Location: http://localhost/Projeto/includes/form.php");
    }

    header("Location: http://localhost/projeto/index.php");
?>
