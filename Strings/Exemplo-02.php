<?php
$nome = "Antonio  Francisco";
// função para deixa tudo em maiusculo
$nome = strtoupper($nome);
echo $nome;
//para minusculo
$nome = strtolower($nome);
echo "<br/> $nome";
//somente a primeira letra
$nome = ucfirst($nome);
echo "<br/> $nome";
// somente as primeiras letras
$nome = ucwords($nome);
echo "<br/> $nome";



 ?>