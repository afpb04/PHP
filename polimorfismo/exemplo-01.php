<?php
abstract class Animal{
    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Anda";
    }
}
class Cachorro extends Animal{
    public function falar(){
        return "Late";
    }

}
class Gato extends Animal{
    public function falar(){
        return "mia";
    }
}
class Passaro extends Animal{
    public function falar(){
        return "Canta";
    }
    public function mover(){
        return "Voa" .parent::mover();
    }
}
$pluto = new Cachorro();
echo $pluto->falar(). "<br/>" ;
echo $pluto-> mover(). "<br/>";

$garfild = new Gato;
echo $garfild->falar(). "<br/>";

$pipiu = new Passaro();
echo $pipiu->falar();
echo $pipiu->mover();

?>