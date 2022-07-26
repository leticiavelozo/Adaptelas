<?php

echo "Digite um numero: ";
fscanf(STDIN, "%d", $num);

if($num < 0){
    $num = $num * (-1);
}

for($i = 0; $i <= $num; $i++){
    if ($i % 2 == 0){
        echo $i . " ";
    }
}

?>