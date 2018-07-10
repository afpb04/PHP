<?php

$file = fopen("log.txt","a+");

fwrite($file, date("Y-m-d h:s:i". "\r\n"));

fclose($file);

echo "arquivo criado com sucesso!";

?>