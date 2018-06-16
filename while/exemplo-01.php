<?php
$condicao = true;
while($condicao == true){
    $numero = rand(1,10);
    if($numero === 3){
        echo "Três!!!";
        $condicao = false;
    }
    echo $numero. " ";

}


?>