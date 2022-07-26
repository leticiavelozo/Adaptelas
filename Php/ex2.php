<?php
    function idadeSeg($idade, $s = 31536000){
        return $idade * $s;
    }
    
    $idade = readline("Digite sua idade: ");
    print idadeSeg($idade);

?>