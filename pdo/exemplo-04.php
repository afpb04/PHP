<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "maria";
$password ="qwerty";
$id = 2;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

var_dump($stmt->execute());


echo "dados atualizados!";




?>