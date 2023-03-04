<?php

    $n1 = $_POST["valor1"];
    $n2 = $_POST["valor2"];
    $n3 = $_POST["valor3"];
    $n4 = $_POST["valor4"];

    $media = ($n1+$n2+$n3+$n4)/4;

    if($media < 6){
        
        echo "Sua média é $media e você está", '<h2 id="vermelho">REPROVADO</h2>';
    }
    else if($media >= 6){
        echo "Sua média é $media e você está ", '<h2 id="azul">APROVADO</h2>';
    }

?>

<style>
    h2#vermelho{
        color: #ff0000;
    }
    h2#azul{
        color: #0000ff;
    }
</style>