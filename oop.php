<?php

//brand model taretiv vareliqparunaktyun //transport class// method get info //licavorel metod(qanak), abstarct method 
//arajin drneri qanak
//erkrord maximal berantsroxutyun
abstract class transport {
    public $model;
    public $taretiv;
    public $vareliq_qanak;
    public function __construct($a,$b,$c) {
    $this->model = $a;
    $this->taretiv = $b;
    $this->vareliq_qanak=$c;
}
    public function get_info() {
        echo $this->model,$this->taretiv,$this->vareliq_qanak;
    }
    public function licq($c){
        $this->vareliq_qanak=$this->vareliq_qanak+$c;
    }
    abstract public  function ogt_vareliq($distance);

}

interface Drivable {
   public function start();
   public function stop();
   public function drive($d);
}

class Car extends transport implements  Drivable{
    static $caxs=6;
    public function  ogt_vareliq($distance){
         return $distance/self::$caxs;
    }
     public function start(){
        echo "go!";
     }
     public function stop(){
        echo "stop";
     }
     public function drive($d){
        echo "we are going to the "; 
        echo($d); 
     }



}

class Truck extends transport implements Drivable{
    static $caxs=15;
    public function ogt_vareliq($distance){
         return $distance/self::$caxs;
    }
     public function start(){
        echo "go!";
     }
     public function stop(){
        echo "stop";
     }
     public function drive($d){
        echo "we are going to the "; 
        echo($d); 
     }

}

$car = new car("tesla",2024,60);
$Truck = new car("Stprinter",2000,40);
 

$hasiv1=($car->vareliq_qanak)-($car->ogt_vareliq(270));
if ($hasiv1<0){
    $car->licq((-1)*$hashiv1);
} 


$hasiv2=($Truck->vareliq_qanak)-($Truck->ogt_vareliq(270));
if ($hasiv2<0){
    $Truck->licq((-1)*$hasiv2);
} 
$car->start();
$Truck->start();
$car->drive("ijevan");

?>