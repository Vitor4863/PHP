<?php
    require_once("conecta2.php");

    if($_POST["cartao"] && $_POST["validade"] &&  $_POST["cvv"] &&  $_POST["cpf"]){

    $cartao = $_POST["cartao"];
    $validade = $_POST["validade"];
    $cvv = $_POST["cvv"];
    $cpf = $_POST["cpf"];

    $query = $conecta->prepare("INSERT INTO tb_Filmes(cartao,validade,cvv,cpf) VALUES (:CARTAO, :VALIDADE, :CVV, :CPF)");

        
        $query->execute(array(
            ':CARTAO' => $cartao,
            ':VALIDADE' => $validade,
            ':CVV' => $cvv,
            ':CPF' => $cpf
        ));
        echo"";
        
        
    }else {
        header("Location: http://localhost/Projeto/includes/form.php");
    }
    header("Location: http://localhost/projeto/index.php");

    
?>