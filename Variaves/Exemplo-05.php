<?php 
$nome = "Antonio";
function teste(){
    global $nome;
    echo $nome;
}
function teste2(){
    $nome = "Cicero";
    echo $nome . "agora no teste 2";
}
teste();
teste2();
?>