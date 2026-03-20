<?php
    //vou pegar a variavel na url
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    echo $nome."<br/>";
    if($idade >= 18){
        echo "Adulto";
    }else{
        echo "Menor";
    }

?>