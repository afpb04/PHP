<?php 
$anoNascimento = 1995;
$nome1 = "Antonio Francisco";
$sobremone = "Pereira Barbosa";
$nomeCompleto = $nome1 ." ". $sobremone;
echo($nomeCompleto);

exit;
echo($nome1);
echo("<br/>");

//limpando a variavel
unset($nome1);
//verificando se a variavel existe
if(isset($nome1)){
    echo($nome1);
}

?>