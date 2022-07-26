<?php
    function area($raio, $pi = 3.14){
        return $raio * $raio * $pi;
    }

    $raio = readline("Digite o valor do raio: ");
    print area($raio);
?>