<?php
function __autoload($nomeClasse){
    require_once("$nomeClasse.php");
   // var_dump($nomeClasse);
}
$carro = new DelRey();
$carro->acelerar(80);



?>