<?php
class Pessoa{

    public $nome;

    public function falar(){
        return "O meu nome é ". $this->nome;
    }

}

$antonio = new Pessoa();
$antonio->nome = "Antonio Francisco";
echo $antonio->falar();
?>