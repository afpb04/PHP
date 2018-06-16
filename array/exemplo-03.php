<?php 
$pessoas = array();

array_push($pessoas, array(
    'nome'=> 'João',
    'idade' => 20
));
array_push($pessoas, array(
    'nome'=> 'José',
    'idade' => 22
));

print_r($pessoas[0]['nome']);
?>