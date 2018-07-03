<?php
interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarAMarcha($marcha);
}

class Civic implements Veiculo{
    public function acelerar($velocidade){
        echo "O veiculo acelerou até ".$velocidade ." km/h";

    }
    public function frenar($velocidade){
        echo "O veiculo frenou até " . $velocidade . " km/h";

    }
    public function trocarAMarcha($marcha){
        echo "O veiculo engatou a macha ". $marcha;

    }

}
$carro = new Civic();
$carro->acelerar(50);
$carro->frenar(40);
$carro->trocarAMarcha(4);
?>
