<?php

    echo "Digite um numero: ";
    fscanf(STDIN, "%d", $num);

    function parImpar($num){
        if( $num % 2 == 0){
            echo "Par";
        }
        else{
            echo "Impar";
        }
    }

    parImpar($num);
?>