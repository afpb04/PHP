<?php

$data = array(
    "empresa"=>"sertão devolopers"
);

setcookie("NOME_DO_COOKIE",json_encode($data), time()+3600);

echo "OK!";


?>