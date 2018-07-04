<?php
require_once("config.php");

use CLiente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Antonio Francisco");
$cad->setEmail("antonio@franciso.com");
$cad->setSenha("123456");
$cad->registrarVenda();
//echo $cad;
?>