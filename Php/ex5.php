<?php
   
    echo "Digite um numero maior que zero: ";
    fscanf(STDIN, "%d", $num);

    for($i = 0; $i <= $num; $i++){
        if ($i % 2 == 0){
            echo $i . " ";
        }
    }


?>