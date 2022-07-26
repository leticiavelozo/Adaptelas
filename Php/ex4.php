<?php

    echo "Digite uma idade: ";
    fscanf(STDIN, "%d", $idade);

    function maioridade($idade){
        if($idade < 18){
            echo "Possui menos que 18 anos";
        }
        else{
            echo "Possui mais que 18 anos";
        }
    }

    maioridade($idade);

?>